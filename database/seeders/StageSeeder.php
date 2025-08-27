<?php

namespace Database\Seeders;

use App\Models\Stage;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stage::create([
            'document_type'        => 'Escrito de demanda',
            'description' => 'Documento presentado por la parte actora donde se exponen los hechos.',
            'file'   => 'archivos/prueba.docx', // Simulas que tienes un archivo aquí
        ]);
    }
}
