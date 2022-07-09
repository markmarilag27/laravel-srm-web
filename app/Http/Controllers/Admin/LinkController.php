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
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $data = Link::query()->hasSimplePagination($request->paginate, $request->limit);

        return view('admin.link', ['data' => $data]);
    }

    public function store(StoreLinkRequest $request)
    {}

    public function update(UpdateLinkRequest $request, Link $link)
    {}

    public function destroy(Link $link)
    {}
}
