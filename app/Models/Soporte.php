<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Soporte
 * @package App\Models
 * @version February 24, 2021, 12:13 am UTC
 *
 * @property string $nombre
 * @property string $cedula
 * @property string $telefono
 * @property string $encargado
 * @property string $descripcion
 */
class Soporte extends Model
{
    use SoftDeletes;

    public $table = 'soportes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'cedula',
        'telefono',
        'encargado',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'cedula' => 'string',
        'telefono' => 'string',
        'encargado' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'cedula' => 'required',
        'telefono' => 'required',
        'encargado' => 'required'
    ];

     public function asignacion (){
     return $this-> hasMany('App\Models\Asignacion');

    }

    
}
