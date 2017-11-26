<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'baseCategory',
            'photo_path' => 'images/foto-def.jpg',
            'photo_alt' => 'base alt',
            'description' => 'min base desacription',
            'url' => 'base-category',
            'h1' => 'baseCategory',
            'title' => 'min base desacription',
            'keywords' => 'base-category',
            'header_description' => 'base-category',
            'category_id' => 0,
            'premodaration' => 0,
        ]);
    }


}
