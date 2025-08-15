<?php

namespace App\Exports;

use App\Models\Judge;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class JudgesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Judge::select([
            'name',
            'age',
            'gender',
            'identification_card',
            'phone_number',
            'email',
            'place_birth',
            'department',
            'residence',
            'country',
            'marital_status',
        ])->get();
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Edad',
            'Género',
            'Identificación',
            'Teléfono',
            'Email',
            'Lugar de Nacimiento',
            'Departamento',
            'Residencia',
            'País',
            'Estado Civil'
        ];
    }
}
