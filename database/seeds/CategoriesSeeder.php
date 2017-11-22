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
            'url' => 'base-category',
            'h1' => 'baseCategory',
            'keywords' => 'base-category',
            'title' => 'base-category'
        ]);
    }
}
