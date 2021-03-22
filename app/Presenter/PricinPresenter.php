<?php

namespace App\Presenter;

use App\Models\User;

class PricinPresenter{


    protected $UsuarioPlan;
    public function __construct(User $usuario)
    {
        $this->UsuarioPlan = $usuario;
    }

    public function hasPlan($id){
     return $this->UsuarioPlan->planes->pluck('id')->intersect($id)->count();
    }
}

