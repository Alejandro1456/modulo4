<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Dentista;


/**
 * Class Paciente
 *
 * @property $id
 * @property $apellidos
 * @property $nombres
 * @property $telefono
 * @property $sesiones
 * @property $edad
 * @property $cita
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'apellidos' => 'required',
		'nombres' => 'required',
		'telefono' => 'required',
		'sesiones' => 'required',
		'edad' => 'required',
		'cita' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['apellidos','nombres','telefono','sesiones','edad','cita'];

    public function dentistas(){
      return $this->belongsTo(Dentista::class);
  }

}
