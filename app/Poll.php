<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $table = 'poll';

    public function options()
    {
        return $this->hasMany('App\Option');
    }
}
