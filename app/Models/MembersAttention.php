<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MembersAttention
 *
 * @property $id
 * @property $members_id
 * @property $description
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MembersAttention extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['members_id', 'description', 'date'];



}
