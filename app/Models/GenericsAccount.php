<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GenericsAccount
 *
 * @property $id
 * @property $sent
 * @property $responsible
 * @property $account
 * @property $password
 * @property $sn_computer
 * @property $brand_computer
 * @property $create
 * @property $update
 * @property $users_id
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GenericsAccount extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sent', 'responsible', 'account', 'sn_computer', 'brand_computer', 'create', 'update', 'users_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id', 'id');
    }
    

}
