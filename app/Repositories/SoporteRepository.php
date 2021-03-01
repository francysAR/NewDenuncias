<?php

namespace App\Repositories;

use App\Models\Soporte;
use App\Repositories\BaseRepository;

/**
 * Class SoporteRepository
 * @package App\Repositories
 * @version February 24, 2021, 12:13 am UTC
*/

class SoporteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'cedula',
        'telefono',
        'encargado',
        'descripcion'
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
        return Soporte::class;
    }
}
