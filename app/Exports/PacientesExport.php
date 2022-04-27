<?php

namespace App\Exports;

use App\Models\Paciente;
use Maatwebsite\Excel\Concerns\FromCollection;

class PacientesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Paciente::all();
    }
    public function headings(): array
    {
        return['ID','apellidos','nombres','telefono','sesiones','edad'];

    }
}
