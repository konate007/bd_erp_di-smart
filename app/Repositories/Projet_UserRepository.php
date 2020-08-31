<?php

namespace App\Repositories;

use App\Models\Projet_User;
use App\Repositories\BaseRepository;

/**
 * Class Projet_UserRepository
 * @package App\Repositories
 * @version August 25, 2020, 7:12 pm UTC
*/

class Projet_UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'projet_id'
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
        return Projet_User::class;
    }
}
