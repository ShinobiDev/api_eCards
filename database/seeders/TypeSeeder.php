<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create(['name' => 'Tipo A', 'type_parent_id' => null]);
        Type::create(['name' => 'Tipo B', 'type_parent_id' => null]);
        Type::create(['name' => 'Tipo A1', 'type_parent_id' => 1]);
    }
}
