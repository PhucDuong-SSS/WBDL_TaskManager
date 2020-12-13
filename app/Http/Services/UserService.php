<?php
namespace App\Http\Services;

use App\Http\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        $fileName='';
        if($request->hasFile('image')){
            $exe_flag=true;
            $allowedfileExtension = ['jpg','png'];
            $file =$request->file('image');

            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension)?$exe_flag=true:$exe_flag=false;
            if($exe_flag)
            {   $fileName =$request->image->store('public');
                $fileName=ltrim($fileName,'public/');
            }

        }
        $user->image=$fileName;

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
        $fileName='';
        if($request->hasFile('image')){
            $exe_flag=true;
            $allowedfileExtension = ['jpg','png'];
            $file =$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension)?$exe_flag=true:$exe_flag=false;
            if($exe_flag)
            {
                Storage::delete('public/'.$user->image);
                $fileName =$request->image->store('public');
                $fileName=ltrim($fileName,'public/');

            }
        }
        $user->image = $fileName;

        $this->userRepository->save($user,$request->roles);

    }
    public function findById($id){
        return $this->userRepository->findById($id);
    }
    public function delete($user){
        Storage::delete('public/'.$user->image);
        return $user->delete();
    }

    public function search($request ){
        $query = $request->search;
       return $this->userRepository->search($query);



    }
}
