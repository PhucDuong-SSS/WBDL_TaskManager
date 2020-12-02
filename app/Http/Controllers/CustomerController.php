<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Models\User;
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
        return view('modules.customer.create');
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

    public function store(Request $request)
    {
        $this->userService->create($request);
        return redirect()->route('customer.index');

    }

    public function edit($id)
    {
        $user = $this->userService->findById($id);

        return view('modules.customer.edit',compact('user'));

    }

    public function delete($id)
    {
        $user=$this->userService->findById($id);
        $this->userService->delete($user);
        return redirect()->route('customer.index');

    }
}
