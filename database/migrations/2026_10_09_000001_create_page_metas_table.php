<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('page_metas')) {
            Schema::create('page_metas', function (Blueprint $table) {
                $table->id();
                $table->string('slug')->unique();
                $table->string('name');
                $table->string('path')->nullable();
                $table->string('route_name')->nullable();
                $table->string('meta_title')->nullable();
                $table->text('meta_description')->nullable();
                $table->unsignedInteger('sort_order')->default(0);
                $table->timestamps();
            });
        }

        $now = now();
        $pages = [
            [
                'slug' => 'home',
                'name' => 'Home',
                'path' => '/',
                'route_name' => 'home',
                'meta_title' => 'Scientific Lab Equipment Manufacturer and Supplier In India',
                'meta_description' => 'Atico Scientific leading laboratory equipment manufacturer, reliable supplier and exporter of lab equipment at best prices. ISO 9001:2015 Quality Systems Certified.',
                'sort_order' => 1,
            ],
            [
                'slug' => 'about-us',
                'name' => 'About Us',
                'path' => '/about-us',
                'route_name' => 'about_us_page',
                'meta_title' => 'About Atico Scientific | Laboratory Equipment Manufacturer',
                'meta_description' => 'Atico Scientific manufactures and exports laboratory equipment for schools, colleges, research labs and vocational institutes.',
                'sort_order' => 2,
            ],
            [
                'slug' => 'contact-us',
                'name' => 'Contact Us',
                'path' => '/contact-us',
                'route_name' => 'contact_us_page',
                'meta_title' => 'Contact Us | Atico Scientific',
                'meta_description' => 'Contact Atico Scientific for quotations, tenders, dealerships and laboratory equipment support worldwide.',
                'sort_order' => 3,
            ],
            [
                'slug' => 'blogs',
                'name' => 'Blog',
                'path' => '/blogs',
                'route_name' => 'blog_page',
                'meta_title' => 'Blog | Atico Scientific',
                'meta_description' => 'News, guides and updates from Atico Scientific on laboratory and educational equipment.',
                'sort_order' => 4,
            ],
            [
                'slug' => 'products',
                'name' => 'Products',
                'path' => '/products',
                'route_name' => 'products.index',
                'meta_title' => 'Our Products | Atico Scientific',
                'meta_description' => 'Browse laboratory and educational equipment manufactured and exported by Atico Scientific.',
                'sort_order' => 5,
            ],
            [
                'slug' => 'lab-tenders',
                'name' => 'Lab Tenders',
                'path' => '/lab-tenders',
                'route_name' => 'lab_tender_page',
                'meta_title' => 'Educational, Scientific, and Workshop Vocational Training Lab Equipment for Ministry of Education Tenders - Atico India',
                'meta_description' => 'We have a wide range of Education, Scientific, and Workshop Tools for Ministry of Education Lab Tenders. Contact us for a quotation.',
                'sort_order' => 6,
            ],
            [
                'slug' => 'engineering-lab-tender',
                'name' => 'Engineering Lab Tender',
                'path' => '/engineering-lab-tender',
                'route_name' => 'engineering_lab_tender_page',
                'meta_title' => 'Engineering Lab Equipment for Ministry of Education Tenders - Atico Scientific',
                'meta_description' => 'Engineering, scientific and workshop laboratory equipment for education tenders. Contact Atico Scientific for a quotation.',
                'sort_order' => 7,
            ],
        ];

        foreach ($pages as $page) {
            $exists = DB::table('page_metas')->where('slug', $page['slug'])->exists();
            if ($exists) {
                continue;
            }
            DB::table('page_metas')->insert($page + [
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('page_metas');
    }
};
