<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movement
 *
 * @property $id
 * @property $movement_type
 * @property $sent
 * @property $address
 * @property $date
 * @property $shipping_medium
 * @property $responsible
 * @property $description
 * @property $created_at
 * @property $updated_at
 * @property $users_id
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movement extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['movement_type', 'sent', 'address', 'date', 'shipping_medium', 'responsible', 'description', 'users_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id', 'id');
    }
    

}
