<?php

namespace App\Exports;

use App\Models\LegalCase;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LegalCasesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
public function collection()
{
    return LegalCase::with(['audience', 'hall', 'stage', 'customer', 'lawyer'])->get()->map(function($case) {
        return [
            'number_file' => $case->number_file,
            'type_case' => $case->type_case,
            'current_status' => $case->current_status,
            'description' => $case->description,
            'audience' => $case->audience?->description ?? '',
            'hall' => $case->hall?->room_name ?? '',
            'stage' => $case->stage?->description ?? '',
            'customer' => $case->customer?->name ?? '',
            'lawyer' => $case->lawyer?->name ?? '',
        ];
    });
}

    public function headings(): array
    {
        return [
            'Número de expediente',
            'Tipo de caso',
            'Estado actual',
            'Descripción',
            'Descripción de audiencia',
            'Nombre de sala',
            'Descripción de etapa',
            'Nombre del cliente',
            'Nombre del abogado'
        ];
    }
}
