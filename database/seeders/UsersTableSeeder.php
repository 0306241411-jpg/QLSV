<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash ;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            'name'=>'Tien Vo',
            'email'=>'tienvo@example.com',
            'password'=> Hash::make('password123'),
            'role'=>'admin',
        ]);

        DB::table("users")->insert([
            'name'=>'Thanh Le',
            'email'=>'thanhle@example.com',
            'password'=> Hash::make('password123'),
            'role'=>'staff',
        ]);

        
        DB::table("users")->insert([
            'name'=>'Lam Nguyen',
            'email'=>'lamnguyen@example.com',
            'password'=> Hash::make('password123'),
            'role'=>'user',
        ]);
    }
}
