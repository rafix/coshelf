<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => "maker",
        ]);

        DB::table('roles')->insert([
            'name' => "retailer",
        ]);

        DB::table('roles')->insert([
            'name' => "admin",
        ]);
    }
}
