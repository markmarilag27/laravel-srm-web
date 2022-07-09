<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHtmlSnippetRequest;
use App\Http\Requests\UpdateHtmlSnippetRequest;
use App\Models\HtmlSnippet;
use Illuminate\Http\Request;

class HtmlSnippetController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $data = HtmlSnippet::query()->hasSimplePagination($request->paginate, $request->limit);

        return view('admin.html_snippet', ['data' => $data]);
    }

    public function store(StoreHtmlSnippetRequest $request)
    {}

    public function update(UpdateHtmlSnippetRequest $request, HtmlSnippet $htmlSnippet)
    {}

    public function destroy(HtmlSnippet $htmlSnippet)
    {}
}
