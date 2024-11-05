<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role_pustakawan = Role ::create([
            'name' => 'pustakawan',
            'guard_name' => 'web'
       ]);
       $role_pustakawan = Role ::create([
        'name' => 'mahasiswa',
        'guard_name' => 'web'
       ]);

       $pustakawan = User::create([
        'name' => 'pustkawan 1',
        'email' => 'pustakawan@gmail.com',
        'password' => Hash::make('password')
       ]);
       $pustakawan->assignRole('pustakawan');
       
        $mahasiswa = User::create([
            'name' => 'mahasiswa 1',
            'email' => 'mahasiswa@gmail.com',
            'password' => Hash::make('password')
       ]);
           $mahasiswa->assignRole('mahasiswa');
    }
}
