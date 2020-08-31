<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 * @package App\Models
 * @version August 22, 2020, 9:25 pm UTC
 *
 * @property string $nom_client
 * @property string $adresse
 * @property integer $telephone1
 * @property integer $telephone2
 * @property string $email
 * @property string $site_web
 * @property string $notes
 */
class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom_client',
        'adresse',
        'telephone1',
        'telephone2',
        'email',
        'site_web',
        'notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom_client' => 'string',
        'adresse' => 'string',
        'telephone1' => 'integer',
        'telephone2' => 'integer',
        'email' => 'string',
        'site_web' => 'string',
        'notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom_client' => 'required',
        'adresse' => 'required',
        'telephone1' => 'required',
        'email' => 'required'
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
