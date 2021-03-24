<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
  
    public function __construct(){
        
        $this->middleware('auth');
    }

    public function index()
    {
        $subcarpetas = auth()->user()->carpetas->subcarpetas->count();
      return view('pages.clienteDashboard',compact('subcarpetas')); 
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
