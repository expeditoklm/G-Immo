<?php

namespace App\Models;

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
 * @property Message[] $messages
 * @property Propriete[] $proprietes
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom_prenom', 'telephone', 'email', 'password', 'pays', 'website', 'description', 'ville', 'role', 'profile_img', 'deleted', 'created_at', 'updated_at', 'remember_token', 'email_verified_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
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
}
