@extends('modules.master')
@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="card">
                        <div class="card-header"> <strong>Customer List</strong>
                            <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net" target="_blank"><small class="text-muted">docs</small></a></div>
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
                                    <th>Status</th>
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
                                    <td><span class="badge {{$user->status ==\App\Http\Controllers\StatusConst::ACTIVE?'badge-success':'badge-dark'}}">{{$user->status ==\App\Http\Controllers\StatusConst::ACTIVE?'Active':'Inactive'}}</span></td>
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
