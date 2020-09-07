<?php

namespace App\Repositories;

use App\Models\Departement;
use App\Repositories\BaseRepository;

/**
 * Class DepartementRepository
 * @package App\Repositories
 * @version September 3, 2020, 12:45 am UTC
*/

class DepartementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom_departement'
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
        return Departement::class;
    }
}
