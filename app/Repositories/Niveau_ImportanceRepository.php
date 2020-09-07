<?php

namespace App\Repositories;

use App\Models\Niveau_Importance;
use App\Repositories\BaseRepository;

/**
 * Class Niveau_ImportanceRepository
 * @package App\Repositories
 * @version September 2, 2020, 9:44 pm UTC
*/

class Niveau_ImportanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'niveau'
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
        return Niveau_Importance::class;
    }
}
