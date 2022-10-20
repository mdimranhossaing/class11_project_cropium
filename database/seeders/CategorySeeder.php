<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) :

            $post = [
                'category_name'         =>  'category' . $i,
                'category_slug'          =>  'category-'. $i,
            ];

            DB::table('categories')->insert($post);

        endfor;
    }
}
