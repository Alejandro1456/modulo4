<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Dentista;
use App\Models\Paciente;

/**
 * Class Cita
 *
 * @property $id
 * @property $paciente_id
 * @property $dentista_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'paciente_id' => 'required',
		'dentista_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['paciente_id','dentista_id'];
    public function dentistas(){
        return $this->belongsToMany(Dentista::class);
    }
    public function pacientes(){
        return $this->belongsToMany(Paciente::class);
    }

}
