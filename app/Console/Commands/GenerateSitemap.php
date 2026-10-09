<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Category;
use App\Models\PageMeta;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Contracts\Http\Kernel as HttpKernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Build sitemap.xml from live categories, products, blogs and static pages';

    public function handle(): int
    {
        $baseUrl = $this->baseUrl();
        $sitemap = Sitemap::create();
        $included = 0;
        $skipped = 0;

        $candidates = array_merge(
            $this->staticPages(),
            $this->modelPages(Category::class, '/category/'),
            $this->modelPages(Product::class, '/product/'),
            $this->modelPages(Blog::class, '/blog/')
        );

        $bar = $this->output->createProgressBar(count($candidates));
        $bar->start();

        foreach ($candidates as $page) {
            $path = $page['path'];
            if ($this->respondsWithOk($path)) {
                $sitemap->add(
                    Url::create($baseUrl.$path)
                        ->setLastModificationDate($page['updated_at'])
                );
                $included++;
            } else {
                $skipped++;
            }
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();

        $target = public_path('sitemap.xml');
        $temporary = $target.'.tmp';
        $sitemap->writeToFile($temporary);
        rename($temporary, $target);

        $this->info("Sitemap written to {$target} ({$included} URLs, {$skipped} skipped).");

        return self::SUCCESS;
    }

    /**
     * Public pages that are not stored as categories, products, or blogs.
     *
     * @return array<int, array{path: string, updated_at: \DateTimeInterface}>
     */
    protected function staticPages(): array
    {
        $pages = [
            ['path' => '/', 'route' => 'home'],
            ['path' => '/about-us', 'route' => 'about_us_page'],
            ['path' => '/contact-us', 'route' => 'contact_us_page'],
            ['path' => '/blogs', 'route' => 'blog_page'],
            ['path' => '/products', 'route' => 'products.index'],
            ['path' => '/lab-tenders', 'route' => 'lab_tender_page'],
            ['path' => '/engineering-lab-tender', 'route' => 'engineering_lab_tender_page'],
        ];

        $updated = [];
        if (Schema::hasTable('page_metas')) {
            $updated = PageMeta::query()
                ->whereIn('route_name', array_column($pages, 'route'))
                ->get()
                ->keyBy('route_name')
                ->all();
        }

        return array_map(function (array $page) use ($updated) {
            $meta = $updated[$page['route']] ?? null;

            return [
                'path' => $page['path'],
                'updated_at' => $meta?->updated_at ?? $meta?->created_at ?? now(),
            ];
        }, $pages);
    }

    /**
     * @param  class-string  $model
     * @return array<int, array{path: string, updated_at: \DateTimeInterface}>
     */
    protected function modelPages(string $model, string $prefix): array
    {
        $pages = [];
        $seen = [];

        $model::query()
            ->where('status', 1)
            ->whereNotNull('slug')
            ->where('slug', '!=', '')
            ->orderBy('id')
            ->select(['id', 'slug', 'updated_at', 'created_at'])
            ->cursor()
            ->each(function ($record) use (&$pages, &$seen, $prefix) {
                $slug = trim((string) $record->slug);
                if ($slug === '' || strpbrk($slug, "/?# \t") !== false) {
                    return;
                }

                $path = $prefix.rawurlencode($slug);
                if (isset($seen[$path])) {
                    return;
                }
                $seen[$path] = true;

                $pages[] = [
                    'path' => $path,
                    'updated_at' => $record->updated_at ?? $record->created_at ?? now(),
                ];
            });

        return $pages;
    }

    protected function respondsWithOk(string $path): bool
    {
        try {
            $kernel = app(HttpKernel::class);
            $request = Request::create($path, 'GET');
            $response = $kernel->handle($request);
            $status = $response->getStatusCode();
            $response->setContent('');
            $kernel->terminate($request, $response);

            return $status === 200;
        } catch (\Throwable $e) {
            return false;
        }
    }

    protected function baseUrl(): string
    {
        $robots = public_path('robots.txt');
        if (is_file($robots) && preg_match('/^Sitemap:\s*(\S+)/mi', (string) file_get_contents($robots), $match)) {
            $parts = parse_url($match[1]);
            if (! empty($parts['scheme']) && ! empty($parts['host'])) {
                $base = $parts['scheme'].'://'.$parts['host'];
                if (! empty($parts['port'])) {
                    $base .= ':'.$parts['port'];
                }

                return rtrim($base, '/');
            }
        }

        return 'https://aticoscientific.com';
    }
}
