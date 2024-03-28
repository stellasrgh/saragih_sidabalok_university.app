<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name' => 'Saragih Sidabalok',
            'date' => '2020-01-01',
            'background' => 'MP4',
            'address' => 'Medan',
            'telephone' => '0123456789',
            'email' => 'eagl3admirer@gmail.com',
          'map' =>'map',
        ]);
    }
}
