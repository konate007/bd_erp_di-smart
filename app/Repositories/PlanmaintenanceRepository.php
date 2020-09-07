<?php

namespace App\Repositories;

use App\Models\Planmaintenance;
use App\Repositories\BaseRepository;

/**
 * Class PlanmaintenanceRepository
 * @package App\Repositories
 * @version September 2, 2020, 9:20 pm UTC
*/

class PlanmaintenanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titre',
        'service_id',
        'description'
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
        return Planmaintenance::class;
    }
}
