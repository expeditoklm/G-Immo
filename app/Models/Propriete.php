<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $type_propriete_id
 * @property integer $user_id
 * @property string $titre
 * @property string $description
 * @property string $status
 * @property integer $nbPiece
 * @property integer $nbChambre
 * @property integer $nbToillete
 * @property integer $prix
 * @property float $surface
 * @property string $adresse
 * @property string $pays
 * @property string $ville
 * @property string $quartier
 * @property string $emailContact
 * @property string $nomContact
 * @property string $prenomContact
 * @property integer $telContact
 * @property integer $vue
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Comment[] $comments
 * @property ProprieteCaracteristique[] $proprieteCaracteristiques
 * @property ProprieteImage[] $proprieteImages
 * @property TypePropriete $typePropriete
 * @property User $user
 */
class Propriete extends Model
{
    
    /**
     * @var array
     */
    protected $fillable = ['type_propriete_id', 'user_id', 'titre', 'description', 'status', 'nbPiece', 'nbChambre', 'nbToillete', 'prix', 'surface', 'adresse', 'pays', 'ville', 'quartier', 'emailContact', 'nomContact', 'prenomContact', 'telContact', 'vue', 'deleted', 'created_at', 'updated_at'];

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
    public function caracteristiques()
    {
        return $this->belongsToMany(Caracteristique::class, 'propriete_caracteristiques', 'propriete_id', 'caracteristique_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proprieteImages()
    {
        return $this->hasMany('App\Models\ProprieteImage');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typePropriete()
    {
        return $this->belongsTo('App\Models\TypePropriete');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
