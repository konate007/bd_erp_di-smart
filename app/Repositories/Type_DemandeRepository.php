<?php

namespace App\Repositories;

use App\Models\Type_Demande;
use App\Repositories\BaseRepository;

/**
 * Class Type_DemandeRepository
 * @package App\Repositories
 * @version September 2, 2020, 9:49 pm UTC
*/

class Type_DemandeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type'
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
        return Type_Demande::class;
    }
}
