<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 */
class Newslater extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['email', 'deleted', 'created_at', 'updated_at'];
}
