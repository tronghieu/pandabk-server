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
            'name' => 'Administrator',
            'email' => 'admin@admin.local',
            'level' => 'ADMIN',
            'password' => bcrypt('secret'),
            'created_at' => Carbon\Carbon::now(),
            'modified_at' => Carbon\Carbon::now()
        ]);
    }
}
