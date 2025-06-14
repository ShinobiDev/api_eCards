<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TypeSeeder::class);  
        $this->call(UserSeeder::class);
        $this->call(ECardSeeder::class);
        $this->call(LinkSeeder::class);
    }
}
