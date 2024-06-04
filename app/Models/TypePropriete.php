<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libelle
 * @property string $created_at
 * @property string $updated_at
 * @property boolean $deleted
 * @property Propriete[] $proprietes
 */
class TypePropriete extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libelle', 'created_at', 'updated_at', 'deleted'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proprietes()
    {
        return $this->hasMany('App\Models\Propriete');
    }
}
