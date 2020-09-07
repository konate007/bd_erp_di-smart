<?php

namespace App\Repositories;

use App\Models\Demande;
use App\Repositories\BaseRepository;

/**
 * Class DemandeRepository
 * @package App\Repositories
 * @version September 2, 2020, 10:04 pm UTC
*/

class DemandeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'objet',
        'departement_id',
        'projet_user_id',
        'message',
        'niveau_importance_id',
        'type_demande_id',
        'statut',
        'responsable'
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
        return Demande::class;
    }
}
