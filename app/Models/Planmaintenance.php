<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Planmaintenance
 * @package App\Models
 * @version September 2, 2020, 9:20 pm UTC
 *
 * @property string $titre
 * @property integer $service_id
 * @property string $description
 */
class Planmaintenance extends Model
{
    use SoftDeletes;

    public $table = 'planmaintenances';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'titre',
        'service_id',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titre' => 'string',
        'service_id' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titre' => 'required|unique:planmaintenances',
        'service_id' => 'required',
        'description' => 'required'
    ];

    
}
