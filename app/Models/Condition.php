<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'success_pipeable',
        'failure_pipeable'
    ];

    /**
     * All the conditions that will run if this condition passes
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function success_pipeable()
    {
        return $this->morphTo('success_pipeable', null, 'success_pipeable_id');
    }

    /**
    * All the conditions that will run if this condition fails
    *
    * @return \Illuminate\Database\Eloquent\Relations\MorphTo
    */
    public function failure_pipeable()
    {
        return $this->morphTo('failure_pipeable');
    }
}
