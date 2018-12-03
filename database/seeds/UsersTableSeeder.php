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
        DB::table('admins')->insert([
          'login' => 'admin',
          'password' => 'admin',
        ]);
        DB::table('categories')->insert([
          'category' => 'Basics',
        ]);
        DB::table('categories')->insert([
          'category' => 'Mobile',
        ]);
        DB::table('categories')->insert([
          'category' => 'Account',
        ]);
        DB::table('categories')->insert([
          'category' => 'Payments',
        ]);
        DB::table('categories')->insert([
          'category' => 'Privacy',
        ]);
        DB::table('categories')->insert([
          'category' => 'Delivery',
        ]);
    }
}
