<?php
namespace App\Http\Repositories;

use App\Models\User;

class UserRepository{
    protected $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function save($user){
        $user->save();
    }
    public function getAll(){
     return  $this->userModel->all();
    }
    public function findById($id)
    {
        return $this->userModel->findOrFail($id);
    }


}
