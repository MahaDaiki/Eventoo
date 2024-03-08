<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Social gathering',
            'Art',
            'Music',
            'Party',
            'Conference',
            'Workshop',
            'Game',
            'Science',
            'Technology Expo',
            'Halloween',
            'Celebration',
            'Travel',
            'Performance',
            'Educational',
            'Fashion',
            'Dance',
            'E-Sports',
            'Theatre',
        ];

        foreach ($categories as $category) {
            Categories::create(['name' => $category]);
           
        }
    }
}
