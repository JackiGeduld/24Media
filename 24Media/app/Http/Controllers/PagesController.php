<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Plan;

class PagesController extends Controller
{
    public function plan($plan){

   $plan = str_replace('-', ' ', $plan);
          
    $plan = DB::table('plans')->where('title', $plan)->first();

    $benefits = Plan::find($plan->id)->benefits;

    return view('plan',['plan'=> $plan, 'benefits' => $benefits]);
    }

  
}
