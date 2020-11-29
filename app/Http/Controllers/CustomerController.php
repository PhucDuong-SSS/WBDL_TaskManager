<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function update()
    {
        //

    }

    public function store(Request $request)
    {
        $this->userService->create($request);
        return redirect()->route('customer.index');

    }

    public function edit($id)
    {
        echo 'id khach hang la '.$id;

    }

    public function delete()
    {
        //

    }
}
