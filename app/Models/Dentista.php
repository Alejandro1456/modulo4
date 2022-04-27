<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;


/**
 * Class Dentista
 *
 * @property $id
 * @property $apellidos
 * @property $nombres
 * @property $turno
 * @property $telefono
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dentista extends Model
{
    
    static $rules = [
		'apellidos' => 'required',
		'nombres' => 'required',
		'turno' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['apellidos','nombres','turno','telefono','correo'];

    public function pacientes(){
      return $this->hasMany(Paciente::class);
  }

}
