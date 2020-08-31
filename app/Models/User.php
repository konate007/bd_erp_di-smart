<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version August 22, 2020, 8:06 pm UTC
 *
 * @property string $prenom
 * @property string $nom
 * @property string $email
 * @property string $password
 * @property string $fonction
 * @property  $role_id
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'prenom',
        'nom',
        'email',
        'password',
        'fonction',
        'role_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'prenom' => 'string',
        'nom' => 'string',
        'email' => 'string',
        'password' => 'string',
        'fonction' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'prenom' => 'required',
        'nom' => 'required',
        'email' => 'required',
        'password' => 'required',
        'fonction' => 'required',
        'role_id' => 'required'
    ];


    public static function boot()
    {
        parent::boot();

        static::creating( function ($model)
        {
            $model->user_created = Auth::user()->id ?? null;
            $model->user_modified = Auth::user()->id ?? null;
        });

        static::updating( function ($model)
        {
            $model->user_modified = Auth::user()->id ?? null;
        });
    }
    
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = \Hash::make($password);
    }

    /**
     * One to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
 
}
