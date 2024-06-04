<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libelle
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property ProprieteCaracteristique[] $proprieteCaracteristiques
 */
class Caracteristique extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libelle', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proprieteCaracteristiques()
    {
        return $this->hasMany('App\Models\ProprieteCaracteristique');
    }
}
