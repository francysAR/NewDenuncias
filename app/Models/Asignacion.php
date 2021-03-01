<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Asignacion
 * @package App\Models
 * @version February 25, 2021, 9:30 pm UTC
 *
 * @property integer $soporte_id
 * @property integer $denuncia_id
 * @property string $fecha
 * @property string $proceso
 * @property string $observacion
 */
class Asignacion extends Model
{
    use SoftDeletes;

    public $table = 'asignacions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'soporte_id',
        'denuncia_id',
        'fecha',
        'proceso',
        'observacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'soporte_id' => 'integer',
        'denuncia_id' => 'integer',
        'fecha' => 'string',
        'proceso' => 'string',
        'observacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'soporte_id' => 'required',
        'denuncia_id' => 'required',
        'fecha' => 'required',
        'proceso' => 'required',
        'observacion' => 'required'
    ];

    public function soporte (){
     return $this-> belongsTo('App\Models\Soporte');

    }

    public function denuncia (){
     return $this-> belongsTo('App\Models\Denuncia');

    }
    
}
