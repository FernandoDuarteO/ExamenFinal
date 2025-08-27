<?php

namespace Database\Seeders;

use App\Models\Hall;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hall::create([
            'room_name' => 'Sala Constitucional',
            'location_room' => 'Pabellón 5, Segundo Piso',
            'code_room' => 'SALCON 201MK',
            'judge_id' => 1
        ]);
    }
}
