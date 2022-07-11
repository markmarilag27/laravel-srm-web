<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $data = Link::query()->latest('id')->hasSimplePagination($request->paginate ?? 1, $request->limit ?? 10);

        return view('admin.link', compact('data'));
    }

    public function store(StoreLinkRequest $request): \Illuminate\Http\RedirectResponse
    {
        $validatedRequest = $request->validated();
        $validatedRequest['is_new_tab'] = $request->has('is_new_tab');
        $link = Link::create($validatedRequest);

        return redirect()->back()->with([
            'success' => $link->title . ' has been updated!'
        ]);
    }

    public function update(UpdateLinkRequest $request, Link $link): \Illuminate\Http\RedirectResponse
    {
        $validatedRequest = $request->validated();
        $validatedRequest['is_new_tab'] = $request->has('is_new_tab');
        $link->update($validatedRequest);

        return redirect()->back()->with([
            'success' => $link->title . ' has been updated!'
        ]);
    }

    public function destroy(Link $link): \Illuminate\Http\RedirectResponse
    {
        $link->delete();

        return redirect()->back()->with([
            'success' => $link->title . ' has been deleted!'
        ]);
    }
}
