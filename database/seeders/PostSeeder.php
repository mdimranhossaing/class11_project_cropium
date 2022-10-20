<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
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
                'title'         =>  'This is title ' . $i,
                'slug'          =>  'this-is-slug-'. $i,
                'contents'      =>  'This is content ' . $i,
                'thumbnail'     =>  'http://127.0.0.1:8000/assets/images/blog-image-1.jpg',
                'author_id'     =>  $i,
                'category_id'   =>  $i,
            ];

            DB::table('posts')->insert($post);

        endfor;
    }
}
