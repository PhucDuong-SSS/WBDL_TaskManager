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
        $user-> email= $request->email;
        $user->password = Hash::make($request->password);
        $user->status = 2;

        $this->userRepository->save($user, $request->roles);
    }
    public function getAll(){
        return $this->userRepository->getAll();
    }
    public function update($user, $request)
    {
        $user->name =$request->name;
        $user->username =$request->username;
        $user->email = $request->email;
        $this->userRepository->save($user);

    }
    public function findById($id){
        return $this->userRepository->findById($id);
    }
    public function delete($user){
        return $user->delete();
    }

    public function search($request ){
        $query = $request->search;
       return $this->userRepository->search($query);



    }
}
