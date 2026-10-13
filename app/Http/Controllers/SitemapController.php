<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\PageMeta;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

class SitemapController extends Controller
{
    public function __invoke()
    {
        $baseUrl = $this->baseUrl();

        return response()->stream(function () use ($baseUrl) {
            echo '<?xml version="1.0" encoding="UTF-8"?>'."\n";
            echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

            foreach ($this->pages() as $page) {
                $loc = htmlspecialchars($baseUrl.$page['path'], ENT_XML1 | ENT_QUOTES, 'UTF-8');
                $lastmod = $page['updated_at']->format('c');
                echo '<url><loc>'.$loc.'</loc><lastmod>'.$lastmod.'</lastmod></url>'."\n";
            }

            echo '</urlset>';
        }, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
            'Cache-Control' => 'no-cache, must-revalidate',
        ]);
    }

    /**
     * @return \Generator<int, array{path: string, updated_at: \DateTimeInterface}>
     */
    protected function pages()
    {
        yield from $this->staticPages();
        yield from $this->modelPages(Category::class, '/category/');
        yield from $this->modelPages(Product::class, '/product/');
        yield from $this->modelPages(Blog::class, '/blog/');
    }

    /**
     * @return \Generator<int, array{path: string, updated_at: \DateTimeInterface}>
     */
    protected function staticPages()
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

        $seen = array_fill_keys(array_column($pages, 'path'), true);
        foreach ($this->publicFixedPages() as $page) {
            if (isset($seen[$page['path']])) {
                continue;
            }
            $seen[$page['path']] = true;
            $pages[] = $page;
        }

        $updated = [];
        if (Schema::hasTable('page_metas')) {
            $updated = PageMeta::query()
                ->whereIn('route_name', array_column($pages, 'route'))
                ->get()
                ->keyBy('route_name')
                ->all();
        }

        $routesUpdated = file_exists(base_path('routes/web.php'))
            ? \Carbon\Carbon::createFromTimestamp(filemtime(base_path('routes/web.php')))
            : now();

        foreach ($pages as $page) {
            $meta = $updated[$page['route']] ?? null;

            yield [
                'path' => $page['path'],
                'updated_at' => $meta?->updated_at ?? $meta?->created_at ?? $routesUpdated,
            ];
        }
    }

    /**
     * Public pages with a fixed address, including landing pages added later.
     *
     * @return array<int, array{path: string, route: string}>
     */
    protected function publicFixedPages(): array
    {
        $skip = ['sitemap.xml', 'thankyou', 'up'];
        $pages = [];

        foreach (Route::getRoutes() as $route) {
            if (! in_array('GET', $route->methods(), true)) {
                continue;
            }
            if (in_array('auth', $route->gatherMiddleware(), true)) {
                continue;
            }

            $uri = trim($route->uri(), '/');
            if ($uri === '' || str_contains($uri, '{') || str_starts_with($uri, 'atico-admin')) {
                continue;
            }
            if (in_array($uri, $skip, true)) {
                continue;
            }

            $action = $route->getActionName();
            $isPublicPage = $action === 'Closure' || str_starts_with($action, 'App\\Http\\Controllers\\Frontend\\');
            if (! $isPublicPage) {
                continue;
            }

            $pages[] = [
                'path' => '/'.$uri,
                'route' => (string) ($route->getName() ?: $uri),
            ];
        }

        return $pages;
    }

    /**
     * @param  class-string  $model
     * @return \Generator<int, array{path: string, updated_at: \DateTimeInterface}>
     */
    protected function modelPages(string $model, string $prefix)
    {
        $seen = [];

        foreach ($model::query()
            ->where('status', 1)
            ->whereNotNull('slug')
            ->where('slug', '!=', '')
            ->orderBy('id')
            ->select(['id', 'slug', 'updated_at', 'created_at'])
            ->cursor() as $record) {
            $slug = trim((string) $record->slug);
            if ($slug === '' || strpbrk($slug, "/?# \t") !== false) {
                continue;
            }

            $path = $prefix.rawurlencode($slug);
            if (isset($seen[$path])) {
                continue;
            }
            $seen[$path] = true;

            yield [
                'path' => $path,
                'updated_at' => $record->updated_at ?? $record->created_at ?? now(),
            ];
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
