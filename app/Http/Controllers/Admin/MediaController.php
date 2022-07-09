<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Models\Media;
use App\Services\MediaService;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    private MediaService $mediaService;

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $data = Media::query()->hasSimplePagination($request->paginate ?? 1, $request->limit ?? 10);

        return view('admin.media', compact('data'));
    }

    public function store(StoreMediaRequest $request)
    {}

    public function update(UpdateMediaRequest $request, Media $media)
    {}

    public function destroy(Media $media)
    {}
}
