<?php

namespace App\Repositories;

use App\Models\Asignacion;
use App\Repositories\BaseRepository;

/**
 * Class AsignacionRepository
 * @package App\Repositories
 * @version February 25, 2021, 9:30 pm UTC
*/

class AsignacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'soporte_id',
        'denuncia_id',
        'fecha',
        'barrio',
        'proceso',
        'observacion'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Asignacion::class;
    }
}
