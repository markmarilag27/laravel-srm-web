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

    public function __construct(MediaService $mediaService)
    {
        $this->mediaService = $mediaService;
    }

    public function index(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $data = Media::query()->latest('id')->hasSimplePagination($request->paginate ?? 1, $request->limit ?? 10);

        return view('admin.media', compact('data'));
    }

    public function store(StoreMediaRequest $request): \Illuminate\Http\RedirectResponse
    {
        $validatedRequest = $request->validated();
        $media = $this->mediaService->createNewMedia($validatedRequest);

        return redirect()->back()->with([
            'success' => $media->title . ' has been created!'
        ]);
    }

    public function update(UpdateMediaRequest $request, Media $media): \Illuminate\Http\RedirectResponse
    {
        $validatedRequest = $request->validated();
        $media = $this->mediaService->updateExistingMedia($validatedRequest, $media);

        return redirect()->back()->with([
            'success' => $media->title . ' has been updated!'
        ]);
    }

    public function destroy(Media $media): \Illuminate\Http\RedirectResponse
    {
        $media->delete();

        return redirect()->back()->with([
            'success' => $media->title . ' has been deleted!'
        ]);
    }
}
