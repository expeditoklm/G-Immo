<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property integer $id
 * @property string $nom_prenom
 * @property integer $telephone
 * @property string $email
 * @property string $password
 * @property string $pays
 * @property string $website
 * @property string $description
 * @property string $ville
 * @property string $role
 * @property string $profile_img
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property string $remember_token
 * @property string $email_verified_at
 * @property Comment[] $comments
 * @property Message[] $messages
 * @property Message[] $messages
 * @property Propriete[] $proprietes
 */
class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['addresse','quartier','ville_id','nom_prenom','bloquer','activer','updatedAdmin', 'sexe', 'telephone', 'email', 'password',  'website', 'description',  'role', 'profile_img', 'rccm','identite','deleted', 'created_at', 'updated_at', 'remember_token', 'email_verified_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Models\Message', 'proprietaire_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function message()
    {
        return $this->hasMany('App\Models\Message');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proprietes()
    {
        return $this->hasMany('App\Models\Propriete');
    }


    public function ville()
    {
        return $this->belongsTo(Ville::class, 'ville_id');
    }
}
