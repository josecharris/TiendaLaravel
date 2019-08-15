<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Super heroes',
                'slug' => 'super-heroes',
                'description' => 'Lorem ipsum dolor sit amet, consectetur',
                'color' => '#445500'
            ],
            [
                'name' => 'Geek',
                'slug' => 'geek',
                'description' => 'Lorem ipsum dolor sit amet, consectetur',
                'color' => '#445500'
            ]
        );
        Category::insert($data);
    }
}
