@extends('modules.master')
@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="card">
                        <div class="card-header"> <strong>Post by Category Id</strong>
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
                            <table class="table table-striped table-bordered ">
                                @if (Session::has('success'))
                                    <p class="text-success">
                                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                                    </p>
                                @endif
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Posts</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($posts) ==0)
                                    <td colspan="5">No data to show</td>
                                    <td colspan="5">No data to show</td>
                                @else
                                    @foreach($posts as $key=> $post)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$post->category->name}}</td>
                                    <td>{{$post->title}}</td>

                                    <td><a class="btn btn-success" href="#">
                                            <svg class="c-icon">
                                                <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass')}}"></use>
                                            </svg></a><a class="btn btn-info" href="#">
                                            <svg class="c-icon">
                                                <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-description')}}"></use>
                                            </svg></a><a class="btn btn-danger" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')"  href="#">
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
