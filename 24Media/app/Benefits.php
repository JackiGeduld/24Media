<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefits extends Model
{
     protected $fillable = [
    'planId',
    'image',
    'description'
    ];

       public function plans()
    {
        return $this->belongsTo('App\Plans');
    }
}
