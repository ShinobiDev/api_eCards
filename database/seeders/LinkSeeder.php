<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Link::create([
            'link' => 'https://example.com/123',
            'user_id' => 1,
            'status_id' => 1,
        ]);
        Link::create([
            'link' => 'https://example.com/456',
            'user_id' => 2,
            'status_id' => 2,
        ]);
    }
}
