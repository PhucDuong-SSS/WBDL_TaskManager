@extends('modules.master')
@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="card">
                        <div class="card-header"> <strong>Customer List</strong>
                            <div class="card-header-actions">
                                <form class="form-inline d-flex justify-content-center md-form form-sm" method="post" action="{{route('customer.search')}}" >
                                    @csrf
                                    <input class="form-control form-control-sm mr-3 w-75" name="search" type="text" placeholder="Search"
                                           aria-label="Search">
                                    <button type="submit"> <svg class="c-icon">
                                            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass')}}"></use>
                                        </svg></button>

                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable">
                                @if (Session::has('success'))
                                    <p class="text-success">
                                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                                    </p>
                                @endif
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>User Name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($users) ==0)
                                    <td colspan="5">No data to show</td>
                                @else
                                    @foreach($users as $key=> $user)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>
                                        @foreach($user->roles as $role)
                                            {{ $role->name . ', '  }}
                                        @endforeach
                                    </td>
                                    <td><span class="badge {{$user->status ==\App\Http\Controllers\StatusConst::ACTIVE?'badge-success':'badge-dark'}}">{{$user->status ==\App\Http\Controllers\StatusConst::ACTIVE?'Active':'Inactive'}}</span></td>
                                    <td><img width="50" src="{{ asset('storage/'.$user->image) }}" alt=""></td>
                                    <td><a class="btn btn-success" href="#">
                                            <svg class="c-icon">
                                                <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass')}}"></use>
                                            </svg></a><a class="btn btn-info" href="{{route('customer.edit',['id'=>$user->id])}}">
                                            <svg class="c-icon">
                                                <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-description')}}"></use>
                                            </svg></a><a class="btn btn-danger" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')"  href="{{route('customer.delete',['id'=>$user->id])}}">
                                            <svg class="c-icon">
                                                <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-trash')}}"></use>
                                            </svg></a></td>
                                </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
