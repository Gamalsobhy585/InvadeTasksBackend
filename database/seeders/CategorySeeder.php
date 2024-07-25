<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Home', 'image' => 'https://example.com/images/home.png'],
            ['name' => 'Work', 'image' => 'https://example.com/images/work.png'],
            ['name' => 'Personal', 'image' => 'https://example.com/images/personal.png'],
            ['name' => 'Friends', 'image' => 'https://example.com/images/friends.png'],
            ['name' => 'Relatives', 'image' => 'https://example.com/images/relatives.png'],
            ['name' => 'School', 'image' => 'https://example.com/images/school.png'],
            ['name' => 'University', 'image' => 'https://example.com/images/university.png'],
            ['name' => 'Business', 'image' => 'https://example.com/images/business.png'],
            ['name' => 'Sport', 'image' => 'https://example.com/images/sport.png'],
            ['name' => 'Fun & Enjoyment', 'image' => 'https://example.com/images/fun_enjoyment.png']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
