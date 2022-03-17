<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['cinema', 'motori', 'cibo', 'sport'];

        foreach($categories as $category_name){
            $newCategory = new Category();
            $newCategory->name = $category_name;
            $newCategory->slug = Str::of($category_name)->slug("-");
            $newCategory->save();
        }
    }
}
