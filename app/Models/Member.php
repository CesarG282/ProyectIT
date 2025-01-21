<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 *
 * @property $id
 * @property $name
 * @property $idshart
 * @property $corporate_mail
 * @property $contact
 * @property $area
 * @property $locality
 * @property $company
 * @property $users_id
 * @property $created_at
 * @property $updated_at
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
    protected $fillable = ['name', 'idshart', 'corporate_mail', 'contact', 'area', 'locality', 'company', 'users_id'];


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
        return $this->hasMany(\App\Models\Assigned::class, 'id', 'members_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function membersAttentions()
    {
        return $this->hasMany(\App\Models\MembersAttention::class, 'id', 'members_id');
    }
    

}
