<?php
namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;


class UserRepository{
    protected $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function save($user, $roles=null){
        DB::beginTransaction();
        try{
            $user->save();
            $user->roles()->sync($roles);
            DB::commit();
            }
        catch(\Exception $exception){
            DB::rollBack();
            return $exception->getMessage();
            }

    }

     function attachRole($user, $roles = null) {
         $user->roles()->attach($roles);
     }

    public function getAll(){
     return  $this->userModel->all();
    }
    public function findById($id)
    {
        return $this->userModel->findOrFail($id);
    }
    public function search($query)
    {
        return $this->userModel->where('name','like','%$query%')
                ->orwhere('username','like',"%$query%")
                ->orwhere('email','like',"%$query%")
                ->get();

    }


}
