<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Assigned
 *
 * @property $id
 * @property $status
 * @property $type
 * @property $brand
 * @property $serie
 * @property $model
 * @property $stiker
 * @property $monitor
 * @property $keyboard
 * @property $mouse
 * @property $adaptador
 * @property $description
 * @property $create
 * @property $update
 * @property $members_id
 *
 * @property Member $member
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Assigned extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['status', 'type', 'brand', 'serie', 'model', 'stiker', 'monitor', 'keyboard', 'mouse', 'adaptador', 'description', 'create', 'update', 'members_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class, 'members_id', 'id');
    }
    

}
