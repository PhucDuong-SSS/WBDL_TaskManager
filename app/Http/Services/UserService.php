<?php
namespace App\Http\Services;

use App\Http\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function create($request){
        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->status = 2;
        $user->role = 1;
        $this->userRepository->save($user);
    }
    public function getAll(){
        return $this->userRepository->getAll();
    }

}
