<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $propriete_id
 * @property string $nom_prenom
 * @property string $email
 * @property string $comment
 * @property integer $note
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Propriete $propriete
 */
class Comment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['propriete_id','user_id', 'nom_prenom', 'email', 'comment', 'note', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function propriete()
    {
        return $this->belongsTo('App\Models\Propriete');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
