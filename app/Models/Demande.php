<?php

namespace App\Models;

use Eloquent as Model;
use Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Demande
 * @package App\Models
 * @version September 2, 2020, 10:04 pm UTC
 *
 * @property string $objet
 * @property integer $departement_id
 * @property integer $projet_id
 * @property string $message
 * @property integer $niveau_importance_id
 * @property integer $type_demande_id
 * @property string $statut
 * @property string|\Carbon\Carbon $date_fermeture
 */
class Demande extends Model
{
    use SoftDeletes;
    

    public $table = 'demandes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'objet',
        'departement_id',
        'projet_id',
        'message',
        'niveau_importance_id',
        'type_demande_id',
        'statut',
        'date_fermeture'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'objet' => 'string',
        'departement_id' => 'integer',
        'projet_id' => 'integer',
        'message' => 'string',
        'niveau_importance_id' => 'integer',
        'type_demande_id' => 'integer',
        'statut' => 'string',
        'date_fermeture' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'objet' => 'required',
        'departement_id' => 'required',
        'projet_id' => 'required',
        'message' => 'required',
        'niveau_importance_id' => 'required',
        'type_demande_id' => 'required',
        'statut' => 'required',
        'date_fermeture' => 'required'
    ];

    
}
