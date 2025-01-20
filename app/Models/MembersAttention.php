<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MembersAttention
 *
 * @property $id
 * @property $description
 * @property $date
 * @property $create
 * @property $update
 * @property $members_id
 *
 * @property Member $member
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
    protected $fillable = ['description', 'date', 'create', 'update', 'members_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class, 'members_id', 'id');
    }
    

}
