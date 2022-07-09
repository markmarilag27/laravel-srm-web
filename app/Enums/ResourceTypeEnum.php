<?php

declare(strict_types=1);

namespace App\Enums;

enum ResourceTypeEnum: String
{
    case MEDIA = 'media';
    case HTML_SNIPPET = 'html_snippet';
    case LINK = 'link';
}
