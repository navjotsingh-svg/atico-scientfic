<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CategoryExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    public function collection()
    {
        return Category::query()->orderBy('id')->get([
            'id',
            'name',
            'parent_id',
            'slug',
            'meta_tag',
            'meta_description',
            'meta_title',
        ]);
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'parent_id',
            'slug',
            'meta_tag',
            'meta_description',
            'meta_title',
        ];
    }

    /**
     * @param  \App\Models\Category  $category
     */
    public function map($category): array
    {
        return [
            $category->id,
            $category->name,
            $category->parent_id,
            $category->slug,
            $category->meta_tag,
            $category->meta_description,
            $category->meta_title,
        ];
    }
}
