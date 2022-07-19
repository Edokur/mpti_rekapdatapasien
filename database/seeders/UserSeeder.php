<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'email' => 'admin@admin.com',
            'no_hp' => '0822',
            'alamat' => 'Yogyakarta',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
    }
}
