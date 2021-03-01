<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Denuncia
 * @package App\Models
 * @version February 24, 2021, 12:10 am UTC
 *
 * @property string $nombre
 * @property string $telefono
 * @property string $asunto
 * @property string $descripcion
 */
class Denuncia extends Model
{
    use SoftDeletes;

    public $table = 'denuncias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_apellido',
        'telefono',
        'barrio',
        'asunto',
        'descripcion',
        'confirmar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_apellido' => 'string',
        'telefono' => 'string',
        'barrio' => 'string',
        'asunto' => 'string',
        'descripcion' => 'string',
        'confirmar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_apellido' => 'required',
        'telefono' => 'required',
        'barrio' => 'required',
        'asunto' => 'required',
        'descripcion' => 'required',
        'confirmar' => 'required'
    ];

    public function asignacion (){
     return $this-> hasMany('App\Models\Asignacion');

    }

    
}
