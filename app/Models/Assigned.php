<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Assigned
 *
 * @property $id
 * @property $members_id
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
 * @property $created_at
 * @property $updated_at
 *
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
    protected $fillable = ['members_id', 'status', 'type', 'brand', 'serie', 'model', 'stiker', 'monitor', 'keyboard', 'mouse', 'adaptador', 'description'];



}
