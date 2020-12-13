<?php

namespace App\Http\Controllers;
use App\Http\Requests\CustomerResquest;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAll();

        return view('modules.customer.index',compact('users'));
    }


    public function create()
    {
        $roles = Role::all();
        return view('modules.customer.create',compact('roles'));
    }

    public function show($id)
    {
        //

    }

    public function update($id, Request $request)
    {
        $user = $this->userService->findById($id);
        $this->userService->update($user,$request);
        Session::flash('success', 'Cập nhật khách hàng thành công');
        return redirect()->route('customer.index');


    }

    public function store(CustomerResquest $request)
    {
        $this->userService->create($request);
        Session::flash('success', 'Thêm khách hàng thành công');
        return redirect()->route('customer.index');

    }

    public function edit($id)
    {    $roles = Role::all();
        $user = $this->userService->findById($id);
        $role_id = User::find($id)->Roles()->get();

        return view('modules.customer.edit',compact(['user','role_id','roles']));

    }

    public function delete($id)
    {
        $user=$this->userService->findById($id);
        $this->userService->delete($user);
        return redirect()->route('customer.index');

    }
    public function search(Request $request){
        $result = $this->userService->search($request);
        return view('modules.customer.search',compact('result'));
    }

    public function setLanguage(Request $request)
    {
        $locale = $request->language;
        session()->put('locale',$locale);
        return back();
    }
}
