<?php

namespace Database\Seeders;

use App\Models\PageImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageImage::create([
            'image_one' => '',
        ]);
    }
}
