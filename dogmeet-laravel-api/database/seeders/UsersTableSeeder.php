<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'name' => 'test1',
            'email' => 'test1@test.com',
            'password' => Hash::make('test1pass'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'test2',
            'email' => 'test2@test.com',
            'password' => Hash::make('test2pass'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'test3',
            'email' => 'test3@test.com',
            'password' => Hash::make('test3pass'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'test4',
            'email' => 'test4@test.com',
            'password' => Hash::make('test4pass'),
        ];
        DB::table('users')->insert($param);
    }
}
