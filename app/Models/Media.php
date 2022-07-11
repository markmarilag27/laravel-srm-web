<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use App\Models\Traits\InteractsWithPagination;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Media extends Model
{
    use HasFactory, HasUuid, InteractsWithPagination;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'title',
        'url',
        'mime',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
    ];
}
