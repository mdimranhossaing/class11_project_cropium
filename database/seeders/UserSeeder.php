<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'username'         =>  'mdimranhossain' . $i,
                'email'         =>  'imran-' . $i . '@gmail.com',
                'password'         =>  'imran' . $i,
            ];

            DB::table('users')->insert($post);

        endfor;
    }
}
