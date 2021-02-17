<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'grace',
                'email' => 'grace@gmail.com',
                'phone' => '08161513221',
                'role' => 'User',
                'password' => bcrypt('grace123'),
            ],

            ['name' => 'admin1',
                'email' => 'admin@gmail.com',
                'phone' => '08559878112',
                'role' => 'Admin',
                'password' => bcrypt('admin123'),
            ],
        ]);
    }
}
