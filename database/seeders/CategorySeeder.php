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
            ['name' => 'Home', 'image' => 'https://st4.depositphotos.com/1009647/27204/i/450/depositphotos_272041202-stock-photo-modern-living-interior-design.jpg'],
    ['name' => 'Work', 'image' => 'https://wallpapers.com/images/featured/work-background-kxmiw0h0ugqy2eoa.jpg'],
    ['name' => 'Personal', 'image' => 'https://c1.wallpaperflare.com/preview/373/573/299/backlit-black-and-white-dark-indoors.jpg'],
    ['name' => 'Friends', 'image' => 'https://www.lovepanky.com/wp-content/uploads/2019/09/background-friend-1.jpg'],
    ['name' => 'Relatives', 'image' => 'https://img.freepik.com/premium-vector/happy-african-family-cartoon-people-characters-isolated-illustration-white-background-smiling-relatives-standing-together-hugging-wife-husband-grandmother-grandfather-son-daughter_89615-956.jpg'],
    ['name' => 'School', 'image' => 'https://i.pinimg.com/736x/8c/7f/0a/8c7f0a2bfbcce8ce52a5e3435258f68f.jpg'],
    ['name' => 'University', 'image' => 'https://png.pngtree.com/thumb_back/fh260/background/20230316/pngtree-university-campus-school-retro-illustration-background-image_1948853.jpg'],
    ['name' => 'Sport', 'image' => 'https://t3.ftcdn.net/jpg/05/32/57/30/360_F_532573032_XeFcG5HojuT8bMYnaKrPv70o4Nulwxwd.jpg'],
    ['name' => 'Holiday', 'image' => 'https://img.freepik.com/premium-photo/vacation-summer-holidays-background-wallpaper-sunny-tropical-exotic-caribbean-paradise-beach_280733-541.jpg']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
