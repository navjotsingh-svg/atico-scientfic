<?php

namespace App\Http\Controllers;

use App\Models\PageMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PageMetaController extends Controller
{
    public function index()
    {
        if (!Schema::hasTable('page_metas')) {
            return redirect()->route('dashboard')->with('error', 'Page SEO is not ready yet. Run the page meta migration first.');
        }

        $pages = PageMeta::orderBy('sort_order')->orderBy('name')->get();

        return view('admin.page_meta.index', compact('pages'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'pages' => 'required|array',
            'pages.*.meta_title' => 'nullable|string|max:255',
            'pages.*.meta_description' => 'nullable|string|max:500',
        ]);

        foreach ($data['pages'] as $id => $fields) {
            $page = PageMeta::find($id);
            if (!$page) {
                continue;
            }

            $page->update([
                'meta_title' => trim((string) ($fields['meta_title'] ?? '')),
                'meta_description' => trim((string) ($fields['meta_description'] ?? '')),
            ]);
        }

        return redirect()->route('page_meta.index')->with('success', 'Meta title and description saved for all pages.');
    }
}
