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

        DB::table('users')->insert([
            'firstName' => 'test',
            'lastName' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'isAdmin' => true,
            'street' => 'Softwarepark',
            'streetNumber' => '33b/2',
            'city' => 'Hagenberg',
            'postalCode' => '4232',
            'country' => 'Austria',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'firstName' => 'test',
            'lastName' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('secret'),
            'isAdmin' => false,
            'street' => 'Softwarepark',
            'streetNumber' => '33b/2',
            'city' => 'Hagenberg',
            'postalCode' => '4232',
            'country' => 'Austria',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}