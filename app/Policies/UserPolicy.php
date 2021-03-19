<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

 
   public function __construct()
   {
       
   }

   public function before(User $user)
{
    if ($user->isAdmin()) {
        return true;
    }
}

    public function viewAny(User $user)
    {

    }

  
    public function view(User $authUser,User $user)
    {  
        return  $authUser->id === $user->id;
    }

   
    public function create(User $user)
    {
        //
    }

    public function update(User $authUser, User $user)
    {
        return  $authUser->id === $user->id;
    }

 
    public function delete(User $user, User $model)
    {
        //
    }

  
    public function restore(User $user, User $model)
    {
        //
    }

    public function forceDelete(User $user, User $model)
    {
        //
    }
}
