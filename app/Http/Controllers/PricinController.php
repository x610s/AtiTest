<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;


class PricinController extends Controller
{
   
    public function index()
    {
        $plan = Plan::all();
        return view('pages.pricing',compact('plan'));
    }
  
    public function update($id)
    {
        $user = User::findOrFail(auth()->user()->id);
        return  $user->planes()->attach($id);
    }
}
