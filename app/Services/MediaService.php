<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class MediaService
{
    public function createNewMedia(array $validatedRequest): Media
    {
        $data = $this->getData($validatedRequest);
        $media = Media::create($data);

        return $media;
    }

    public function updateExistingMedia(array $validatedRequest, Media $media): Media
    {
        $data = $this->getData($validatedRequest);
        $media->update($data);

        return $media;
    }

    private function getData(array $validatedRequest): array
    {
        $url = null;
        $data = ['title' => $validatedRequest['title']];

        if (filled($validatedRequest['uploaded'])) {
            $url = $this->storeDocument($validatedRequest['uploaded']);
        }


        if (filled($url)) {
            $data['url'] = $url;
        }

        return $data;
    }

    private function storeDocument(UploadedFile $file): string
    {
        $path = Storage::put('public', $file);
        return Storage::url($path);
    }
}
