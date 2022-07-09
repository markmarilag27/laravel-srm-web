<?php

namespace Database\Seeders;

use App\Models\HtmlSnippet;
use App\Models\Link;
use App\Models\Media;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Media::factory()->count(1000)->create();
        Link::factory()->count(1000)->create();
        HtmlSnippet::factory()->count(1000)->create();
    }
}
