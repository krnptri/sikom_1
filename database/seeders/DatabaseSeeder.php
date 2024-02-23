<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         User::create([
            'name' => 'JAEHYUN',
            'email' => 'jaehyun@gmail.com',
            'password' => Hash::make('12345'),
            'nama_lengkap' => 'jung_jaehyun',
            'alamat' => 'korea',
            'role' => 'administrator',
            'verifikasi' => 'sudah',
            'alamat' => 'subang'
         ]);
    }
}
