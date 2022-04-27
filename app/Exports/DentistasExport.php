<?php

namespace App\Exports;

use App\Models\Dentista;
use Maatwebsite\Excel\Concerns\FromCollection;

class DentistasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dentista::all();
    }
    public function headings(): array
    {
        return['ID','apellidos','nombres','turno'];

    }
}
