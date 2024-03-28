<?php

namespace Database\Seeders;

use App\Models\Presentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Presentation::create([
            'presentation_title' => 'Saragih Sidabalok',
            'presentation_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
            'presentation_image' => 'jpg',
            'presentation_url' => 'http://test.com',

        ]);
    }
}
