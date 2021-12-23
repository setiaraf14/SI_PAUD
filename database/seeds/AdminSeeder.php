<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'user_role' => 'admin',
            'telepon' => '089087876565',
            'alamat' => 'Graha',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('121212')
        ]);
    }
}
