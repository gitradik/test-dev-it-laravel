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
            'name' => 'rodia26',
            'email' => 'rminzp17@gmail.com',
            'password' => '9571Programmer',
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
