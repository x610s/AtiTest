<?php

namespace App\Repository;

interface I_UserRepository {

    public function getUser($id);
    public function getAll();
    public function updateUser($request,$id);
    public function destroyUser($id);
}
?>