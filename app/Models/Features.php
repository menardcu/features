<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $feature_name
 * @property string $email
 * @property boolean $enable
 * @property string $created_at
 * @property string $updated_at
 */
class Features extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['feature_name', 'email', 'enable',' created_at','updated_at'];

}
