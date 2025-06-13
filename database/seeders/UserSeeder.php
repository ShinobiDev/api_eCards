<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan Perez',
            'document_type_id' => 1,
            'document' => '12345678',
            'email' => 'juan@example.com',
            'rol_id' => 1,
            'password' => Hash::make('password'),
            'phone' => '555-1234',
            'cel_phone' => '555-5678',
            'birthday' => '1990-01-01',
        ]);

        User::create([
            'name' => 'Maria Lopez',
            'document_type_id' => 1,
            'document' => '87654321',
            'email' => 'maria@example.com',
            'rol_id' => 2,
            'password' => Hash::make('password'),
            'phone' => '555-4321',
            'cel_phone' => '555-8765',
            'birthday' => '1992-02-02',
        ]);
    }
}
