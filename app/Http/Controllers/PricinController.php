<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;


class PricinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = Plan::all();
        return view('pages.pricing',compact('plan'));
    }

   
    public function create()
    {
        //
    }

    public function store($request)
    {
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

  
    public function update($id)
    {
        $user = User::findOrFail(auth()->user()->id);
        
        return  $user->planes()->attach($id);
    }

  
    public function destroy($id)
    {
        //
    }
}
