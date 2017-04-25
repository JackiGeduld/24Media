<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
     protected $fillable = [
        'firstName',
        'surname',
        'email',
        'phoneNumber',
        'idNumber',
        'remember_token',
        'created_at' 
    ];


   public static function CreateQuote($request){

   $quote = array(
   	    'firstName' => $request->firstName,
        'surname' => $request->surname,
        'email' => $request->email,
        'phoneNumber' => $request->phoneNumber,
        'idNumber' => $request->idNumber,
        'remember_token' => $request->_token
        );

     return $quote;
    }

}
