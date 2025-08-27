<?php

namespace Database\Seeders;

use App\Models\Judge;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JudgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Judge::create([
            'name' => 'Emmanuel Sanchez',
            'age' => 32,
            'gender' => 'Masculino',
            'identification_card' => '161-070503-1004Q',
            'phone_number' => '55510045',
            'email' => 'emmanuelsanchez@gmail.com',
            'place_birth' => 'Condega',
            'department' => 'Esteli',
            'residence' => 'Esteli',
            'ethnicity' => 'Miskitos',
            'address' => 'Del mercado 2C, al norte',
            'nationality' => 'Nicaragüense',
            'country' => 'Nicaragua',
            'marital_status' => 'Soltero',
        ]);

        Judge::create([
            'name' => 'Maria Pascual',
            'age' => 32,
            'gender' => 'Femenino',
            'identification_card' => '161-070503-1004Y',
            'phone_number' => '55510077',
            'email' => 'mariapascual@gmail.com',
            'place_birth' => 'Condega',
            'department' => 'Esteli',
            'residence' => 'Esteli',
            'ethnicity' => 'Miskitos',
            'address' => 'Al frente del parque infantil',
            'nationality' => 'Nicaragüense',
            'country' => 'Nicaragua',
            'marital_status' => 'Soltera',
        ]);
    }
}
