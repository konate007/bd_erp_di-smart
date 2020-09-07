<?php

namespace App\Repositories;

use App\Models\Contrat;
use App\Repositories\BaseRepository;

/**
 * Class ContratRepository
 * @package App\Repositories
 * @version September 3, 2020, 9:53 pm UTC
*/

class ContratRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'projet_user_id',
        'planmaintenance_id',
        'description',
        'date_debut',
        'date_fin',
        'statut'
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
        return Contrat::class;
    }
}
