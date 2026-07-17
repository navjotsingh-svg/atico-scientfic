<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    public function collection()
    {
        return Product::query()->orderBy('id')->get([
            'id',
            'name',
            'product_code',
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
            'product_code',
            'slug',
            'meta_tag',
            'meta_description',
            'meta_title',
        ];
    }

    /**
     * @param  \App\Models\Product  $product
     */
    public function map($product): array
    {
        return [
            $product->id,
            $product->name,
            $product->product_code,
            $product->slug,
            $product->meta_tag,
            $product->meta_description,
            $product->meta_title,
        ];
    }
}
