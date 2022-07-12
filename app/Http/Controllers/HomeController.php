<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\ResourceTypeEnum;
use App\Http\Requests\GetResourceRequest;
use App\Models\HtmlSnippet;
use App\Models\Link;
use App\Models\Media;

class HomeController extends Controller
{
    public function index(GetResourceRequest $request)
    {
        $validatedRequest = $request->validated();
        $page = $validatedRequest['page'] ?? 1;
        $limit = $validatedRequest['limit'] ?? 10;
        $type = $validatedRequest['type'] ?? 'media';

        $data = match ($type) {
            ResourceTypeEnum::MEDIA->value => Media::query()->latest('id')->hasSimplePagination($page, $limit),
            ResourceTypeEnum::HTML_SNIPPET->value => HtmlSnippet::query()->latest('id')->hasSimplePagination($page, $limit),
            ResourceTypeEnum::LINK->value => Link::query()->latest('id')->hasSimplePagination($page, $limit)
        };

        return view('pages.index', compact('data'));
    }
}
