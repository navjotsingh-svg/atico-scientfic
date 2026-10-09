<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class PageMeta extends Model
{
    protected $table = 'page_metas';

    protected $fillable = [
        'slug',
        'name',
        'path',
        'route_name',
        'meta_title',
        'meta_description',
        'sort_order',
    ];

    public static function forRoute(?string $routeName): ?self
    {
        if (!$routeName || !Schema::hasTable('page_metas')) {
            return null;
        }

        return static::where('route_name', $routeName)->first();
    }
};
