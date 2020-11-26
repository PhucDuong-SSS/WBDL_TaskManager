<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function  index()
    {
        $customer = [
            [
                'id' => 1,
                'name'=>'phuc',
                'email'=>'phuc@gmail.com',
                'phone'=>'01234568'

            ],
            [
                'id' => 2,
                'name'=>'ngoc',
                'email'=>'duong@gmail.com',
                'phone'=>'01234568'
            ],
            [
                'id' => '3',
                'name'=>'duong',
                'email'=>'phungocc@gmail.com',
                'phone'=>'01234568'
            ],
        ];
        return view('modules.customer.index',compact('customer'));
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
        dd($request->all());

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
