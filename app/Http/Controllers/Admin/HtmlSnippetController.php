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
    public function index(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $data = HtmlSnippet::query()->latest('id')->hasSimplePagination($request->paginate ?? 1, $request->limit ?? 10);

        return view('admin.html_snippet.index', ['data' => $data]);
    }

    public function store(StoreHtmlSnippetRequest $request): \Illuminate\Http\RedirectResponse
    {
        $validatedRequest = $request->validated();
        $htmlSnippet = HtmlSnippet::create($validatedRequest);

        return redirect()->route('admin.htmlSnippet.index')->with([
            'success' => $htmlSnippet->title . ' has been created!'
        ]);
    }

    public function create(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('admin.html_snippet.store');
    }

    public function edit(HtmlSnippet $htmlSnippet): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('admin.html_snippet.edit', compact('htmlSnippet'));
    }

    public function update(UpdateHtmlSnippetRequest $request, HtmlSnippet $htmlSnippet): \Illuminate\Http\RedirectResponse
    {
        $validatedRequest = $request->validated();
        $htmlSnippet->update($validatedRequest);

        return redirect()->back()->with([
            'success' => $htmlSnippet->title . ' has been updated!'
        ]);
    }

    public function destroy(HtmlSnippet $htmlSnippet): \Illuminate\Http\RedirectResponse
    {
        $htmlSnippet->delete();

        return redirect()->back()->with([
            'success' => $htmlSnippet->title . ' has been deleted!'
        ]);
    }
}
