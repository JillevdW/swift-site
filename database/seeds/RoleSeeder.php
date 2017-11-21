<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' => 'Guest'
        ]);
        DB::table('roles')->insert([
            'title' => 'Helper'
        ]);
        DB::table('roles')->insert([
            'title' => 'Admin'
        ]);
    }
}
