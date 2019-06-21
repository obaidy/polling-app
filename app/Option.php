<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'options';

    protected $fillable = ['name'];

    public function polls()
    {
        return $this->belongsTo('App\Poll');
    }
}
