<?php

namespace Database\Seeders;

use App\Models\Lawyer;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LawyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lawyer::create([
            'name' => 'Angel Lopez',
            'age' => 32,
            'gender' => 'Masculino',
            'identification_card' => '161-070503-1004Q',
            'phone_number' => '55510000',
            'email' => 'angellopez@gmail.com',
            'professional_code' => 'AL2025MK',
            'place_birth' => 'Condega',
            'department' => 'Esteli',
            'residence' => 'Esteli',
            'ethnicity' => 'Miskitos',
            'address' => 'Del mercado 5C, al norte',
            'nationality' => 'Nicaragüense',
            'country' => 'Nicaragua',
            'marital_status' => 'Soltero',
        ]);


        Lawyer::create([
            'name' => 'Luis Martinez',
            'age' => 32,
            'gender' => 'Masculino',
            'identification_card' => '161-070503-1004W',
            'phone_number' => '55510055',
            'email' => 'luismartinez@gmail.com',
            'professional_code' => 'LM2025MK',
            'place_birth' => 'Condega',
            'department' => 'Esteli',
            'residence' => 'Esteli',
            'ethnicity' => 'Miskitos',
            'address' => 'Del parque central 5C, al norte',
            'nationality' => 'Nicaragüense',
            'country' => 'Nicaragua',
            'marital_status' => 'Soltero',
        ]);
    }
}
