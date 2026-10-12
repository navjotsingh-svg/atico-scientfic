<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasColumn('categories', 'title')) {
            return;
        }

        Schema::table('categories', function (Blueprint $table) {
            $table->string('title')->nullable()->after('short_name');
        });
    }

    public function down(): void
    {
        if (! Schema::hasColumn('categories', 'title')) {
            return;
        }

        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
};
