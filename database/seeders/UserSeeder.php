<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'nom'=>'admin',
            'email'=>'admin@est.com',
            'role' => '2',
            'password'=>Hash::make('admin123'),
            'num_etd'=>'A0'
            
        ]);

        //gha bach ntestiw wach middleware khadam ola la
        DB::table('users')->insert([
            'nom'=>'etudiant',
            'email'=>'etudiant@est.com',
            'role' => '0',
            'password'=>Hash::make('etudiant123'),
            'num_etd'=>'A1'
        ]);

        DB::table('users')->insert([
            'nom'=>'jury',
            'email'=>'jury@est.com',
            'role' => '1',
            'password'=>Hash::make('jury123'),
            'num_etd'=>'A2'
        ]);
    }
}
