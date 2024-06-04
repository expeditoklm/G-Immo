<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $propriete_id
 * @property string $url
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Propriete $propriete
 */
class ProprieteImage extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['propriete_id', 'url', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function propriete()
    {
        return $this->belongsTo('App\Models\Propriete');
    }
}
