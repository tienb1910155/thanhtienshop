<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@localhost.com',
                'password' => bcrypt('123456'),
            ],

        ]);

        // DB::table('users')->insert([
        //     [
        //         'name' => 'User01',
        //         'phone' => '1',
        //         'password' => bcrypt('1'),
        //         'point' => 0,
        //     ],

        // ]);
        // DB::table('saleoffs')->insert([
        //     [
        //         'name' => 'NONE',
        //     ]
        // ]);
        // DB::table('products')->insert([
        //     [
        //         'name' => 'Admin',
        //         'phone' => '1',
        //         'password' => bcrypt('123456'),
        //     ]
        // ]);
    }
}
