<?php

namespace App\Repositories;

use App\Models\Denuncia;
use App\Repositories\BaseRepository;

/**
 * Class DenunciaRepository
 * @package App\Repositories
 * @version February 24, 2021, 12:10 am UTC
*/

class DenunciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'telefono',
        'barrio',
        'asunto',
        'descripcion',
        'confirmar'

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
        return Denuncia::class;
    }
}
