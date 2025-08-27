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
            'address' => 'De la catedral 2C, al norte',
            'identification_card' => '161-070503-1004K',
            'phone_number' => '55510234',
            'place_birth' => 'Condega',
            'departments' => 'Esteli',
            'residence' => 'Esteli',
            'nationality' => 'Nicaragüense',
            'country' => 'Nicaragua',
            'marital_status' => 'Soltero',
        ]);

        Customer::create([
            'name' => 'Manuel Perez',
            'age' => 32,
            'gender' => 'Masculino',
            'date_birth' => '2000-05-10',
            'address' => 'De la catedral 5C, al sur',
            'identification_card' => '161-070503-1004M',
            'phone_number' => '55510299',
            'place_birth' => 'Condega',
            'departments' => 'Esteli',
            'residence' => 'Esteli',
            'nationality' => 'Nicaragüense',
            'country' => 'Nicaragua',
            'marital_status' => 'Soltero',
        ]);

        Customer::create([
            'name' => 'Benito Martinez',
            'age' => 35,
            'gender' => 'Masculino',
            'date_birth' => '2000-05-10',
            'address' => 'De la UNI, 2C al oeste',
            'identification_card' => '161-070503-1004T',
            'phone_number' => '55510200',
            'place_birth' => 'Condega',
            'departments' => 'Esteli',
            'residence' => 'Esteli',
            'nationality' => 'Nicaragüense',
            'country' => 'Nicaragua',
            'marital_status' => 'Soltero',
        ]);

    }
}
