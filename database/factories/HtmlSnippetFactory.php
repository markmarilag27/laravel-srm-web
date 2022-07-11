<?php

namespace Database\Factories;

use App\Models\HtmlSnippet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HtmlSnippet>
 */
class HtmlSnippetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = HtmlSnippet::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->text,
            'description' => "<h1>Hello World</h1><br><p>And many a time, towards the end of life, does the genius repent of his choice.</p>",
        ];
    }
}
