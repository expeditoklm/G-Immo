<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $nom_prenom
 * @property string $email
 * @property integer $telephone
 * @property string $titre_msg
 * @property string $message
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Message extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id','proprietaire_id', 'nom_prenom', 'email', 'telephone', 'titre_msg', 'message', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
