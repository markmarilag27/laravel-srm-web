<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\ResourceTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GetResourceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'page' => ['sometimes', 'required', 'numeric'],
            'limit' => ['sometimes', 'required', 'numeric'],
            'type' => [
                'sometimes',
                'required',
                'string',
                Rule::in(ResourceTypeEnum::cases())
            ],
        ];
    }
}
