<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    protected $fillable = [
    'title',
    'price',
    'description', 
    'subdescription',
    'remembertoken' 
    ];

    public function benefits()
    {
        return $this->hasMany('App\Benefits');
    }
}
