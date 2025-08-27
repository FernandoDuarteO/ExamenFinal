<?php

namespace Database\Seeders;

use App\Models\LegalCase;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LegalCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LegalCase::create([
            'number_file' => 'EXP-2025-00123',
            'type_case' => 'Demanda por difamación',
            'current_status' => 'Activo',
            'description' => 'El demandante acusa al demandado de realizar declaraciones falsas que han afectado su reputación.',
            'audience_id' => 1,
            'hall_id' => 1,
            'stage_id' => 1,
            'customer_id' => 1,
            'lawyer_id' => 1
        ]);
    }
}
