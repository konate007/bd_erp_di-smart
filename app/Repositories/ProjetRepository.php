<?php

namespace App\Repositories;

use App\Models\Projet;
use App\Repositories\BaseRepository;

/**
 * Class ProjetRepository
 * @package App\Repositories
 * @version August 22, 2020, 9:54 pm UTC
*/

class ProjetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom_projet',
        'description',
        'client_id',
        'date_lancement',
        'date_livraison'
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
        return Projet::class;
    }
}
