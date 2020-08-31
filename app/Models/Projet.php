<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Projet
 * @package App\Models
 * @version August 22, 2020, 9:54 pm UTC
 *
 * @property string $nom_projet
 * @property string $description
 * @property integer $client_id
 * @property string $date_lancement
 * @property string $date_livraison
 */
class Projet extends Model
{
    use SoftDeletes;

    public $table = 'projets';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom_projet',
        'description',
        'client_id',
        'date_lancement',
        'date_livraison'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom_projet' => 'string',
        'description' => 'string',
        'client_id' => 'integer',
        'date_lancement' => 'date',
        'date_livraison' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom_projet' => 'required',
        'client_id' => 'required',
        'date_lancement' => 'required'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating( function ($model)
        {
            $model->user_created = Auth::user()->id ?? null;
            $model->user_modified = Auth::user()->id ?? null;
            print($model);
        });

        static::updating( function ($model)
        {
            $model->user_modified = Auth::user()->id ?? null;
        });
    }    
    
}
