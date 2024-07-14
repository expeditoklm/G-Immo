<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libelle
 * @property string $created_at
 * @property string $updated_at
 * @property Propriete[] $proprietes
 * @property User[] $users
 */
class Ville extends Model
{
    protected $fillable = ['libelle', 'created_at', 'updated_at'];

    public function proprietes()
    {
        return $this->hasMany(Propriete::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
