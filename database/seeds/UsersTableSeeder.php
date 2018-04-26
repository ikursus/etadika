<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Sample Data User 1
        DB::table('users')->insert([
            'nama' => 'Amirol Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'telefon' => '0123456789',
            'role' => '2'
        ]);

        # Sample Data User 2
        DB::table('users')->insert([
            'nama' => 'Demo User 1',
            'email' => 'demo@gmail.com',
            'password' => bcrypt('demo'),
            'telefon' => '0123456789',
            'role' => '1'
        ]);

        # Sample Data User 3
        DB::table('users')->insert([
            'nama' => 'Demo User 2',
            'email' => 'demo2@gmail.com',
            'password' => bcrypt('demo2'),
            'telefon' => '0123456789',
            'role' => '1'
        ]);
    }
}
