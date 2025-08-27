<?php

namespace Database\Seeders;

use App\Models\Customer;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Juan Perez Ruiz',
            'age' => 30,
            'gender' => 'Masculino',
            'date_birth' => '1995-05-10',
            'address' => 'Av. por el palo de mango rojo',
            'identification_card' => '161-070503-1004K',
            'phone_number' => '5551234',
            'place_birth' => 'Esteli',
            'residence' => 'Esteli',
            'nationality' => 'Nicaragüense',
            'departments' => 'Esteli',
            'country' => 'Nicaragua',
            'marital_status' => 'Soltero',
        ]);

        Customer::create([
            'name' => 'Juan Perez',
            'age' => 30,
            'gender' => 'Masculino',
            'date_birth' => '1995-05-10',
            'address' => 'Av. Siempre Viva 742',
            'identification_card' => '123456789',
            'phone_number' => '5551204',
            'place_birth' => 'Esteli',
            'residence' => 'Esteli',
            'nationality' => 'Nicaragüense',
            'departments' => 'Esteli',
            'country' => 'Nicaragua',
            'marital_status' => 'Soltero',
        ]);

    }
}
