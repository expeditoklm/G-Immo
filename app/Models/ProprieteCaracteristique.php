<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $propriete_id
 * @property integer $caracteristique_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Caracteristique $caracteristique
 * @property Propriete $propriete
 */
class ProprieteCaracteristique extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['propriete_id', 'caracteristique_id', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function caracteristique()
    {
        return $this->belongsTo('App\Models\Caracteristique');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function propriete()
    {
        return $this->belongsTo('App\Models\Propriete');
    }
}



