<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ECard;

class ECardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ECard::create([
            'serial' => 'ECARD001',
            'user_id' => 1,
            'status_id' => 1,
            'fecha_activacion' => '2025-01-01',
            'fecha_desactivacion' => null,
        ]);
        ECard::create([
            'serial' => 'ECARD002',
            'user_id' => 2,
            'status_id' => 2,
            'fecha_activacion' => '2025-02-01',
            'fecha_desactivacion' => '2025-12-31',
        ]);
    }
}
