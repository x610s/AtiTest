<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateUserRequest;
use App\Http\Requests\userStoreRequest;
use App\Models\User;
use App\Repository\I_UserRepository;

class UserController extends Controller
{
    protected $usuarioDAO;



    public function __construct(I_UserRepository $user)
    {
        $this->usuarioDAO = $user;
       /*  $this->middleware('auth'); */
    }

    public function index()
    {
   /*  return $this->usuarioDAO->getAll(); */
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
        /*  $this->usuarioDAO->getUser($id); */
        $usuario =  User::findOrFail($id);
        $this->authorize($usuario);
        return view('pages.perfil',compact('usuario'));
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
