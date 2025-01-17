<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movement
 *
 * @property $idmovements
 * @property $movement_type
 * @property $sent
 * @property $address
 * @property $date
 * @property $shipping_medium
 * @property $responsible
 * @property $description
 * @property $create
 * @property $update
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
    protected $fillable = ['idmovements', 'movement_type', 'sent', 'address', 'date', 'shipping_medium', 'responsible', 'description', 'create', 'update', 'users_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id', 'id');
    }
    

}
