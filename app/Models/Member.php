<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 *
 * @property $idmembers
 * @property $name
 * @property $idshart
 * @property $corporate_mail
 * @property $contact
 * @property $area
 * @property $locality
 * @property $company
 * @property $create
 * @property $update
 * @property $users_id
 *
 * @property User $user
 * @property Assigned[] $assigneds
 * @property MembersAttention[] $membersAttentions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Member extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idmembers', 'name', 'idshart', 'corporate_mail', 'contact', 'area', 'locality', 'company', 'create', 'update', 'users_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assigneds()
    {
        return $this->hasMany(\App\Models\Assigned::class, 'idmembers', 'members_idmembers');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function membersAttentions()
    {
        return $this->hasMany(\App\Models\MembersAttention::class, 'idmembers', 'members_idmembers');
    }
    

}
