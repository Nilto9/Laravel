<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $telefono
 * @property $email
 * @property $direccion
 * @property $dni
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contacto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'direccion' => 'required',
		'dni' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','telefono','email','direccion','dni'];



}
