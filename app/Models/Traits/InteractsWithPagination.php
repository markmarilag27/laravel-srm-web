<?php

declare(strict_types=1);

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait InteractsWithPagination
{
    public function scopeHasSimplePagination(Builder $query, ?int $page = null, ?int $limit = 10)
    {
        if (blank($page)) {
            return $query;
        }

        return $query->simplePaginate($limit, ['*'], 'page', $page);
    }
}
