<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'npm' => '50422069',
            'name'=>'Admin GunadarmaOjek',
            'email' => 'admingunjek@gmail.com',
            'nomor_handphone' => '081905157614' ,
            'role'=>'admin',
            'email_verified_at'=>date("d-m-y H:i:s"),
            'password' => Hash::make('admingunjek'),
        ]);
    }
}
