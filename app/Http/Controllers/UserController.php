<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateUserRequest;
use App\Http\Requests\userStoreRequest;
use App\Repository\I_UserRepository;

class UserController extends Controller
{
    protected $usuarioDAO;

    public function __construct(I_UserRepository $user)
    {
        $this->usuarioDAO = $user;
    }

    public function index()
    {
    return $this->usuarioDAO->getAll();
    }

  
    public function create()
    {
        //
    }

 
    public function store(userStoreRequest $request)
    { 
        return $this->usuarioDAO->storeUser($request);
    }

  
    public function show($id)
    {
        $user =  $this->usuarioDAO->getUser($id);
        return view('pages.perfil',compact('user'));
    }

    public function edit($id)
    {
        //
    }

    public function update(updateUserRequest $request, $id)
    {
        $this->usuarioDAO->updateUser($request,$id);
       return back()->with('status','Usuario Actualizado correctamente');
    }

  
    public function destroy($id)
    {
        //
    }
}
