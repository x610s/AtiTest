<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\I_UserRepository;
use Illuminate\Support\Facades\Storage;

class Impl_UserRepository implements I_UserRepository
{

    public function getUser($id)
    {
        return User::with(['roles','planes'])->findOrFail($id);
    }



    public function getAll()
    {
        return User::with('roles')->get();
    }


    public function updateUser($request, $id)
    {

        $user = User::findOrFail($id);


        if ($request->hasFile('avatar')) {
            $this->updateImg($user,$request);
        }
        $user->update($request->except('avatar'));
    }


    public function destroyUser($id)
    {
    }

    public function storeUser($request)
    {
        $usuario =  User::create($request->all());
        return $usuario;
    }

    public function isDefault($user)
    {
        return $user->avatar == 'default.png';
    }


    public function updateImg($user, $request)
    {
        if (!$this->isDefault($user)) {
            Storage::delete($user->avatar);
        }
        $user->avatar = $request->file('avatar')->store('public');
    }
}
