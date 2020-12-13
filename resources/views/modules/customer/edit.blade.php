@extends('modules.master')
@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><strong>Insert New Customerr</strong></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="{{route('customer.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-name">Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-name" type="text" value="{{$user->name}}" name="name" placeholder="Enter your name" autocomplete="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-username">User Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-username" type="text" value="{{$user->username}}" name="username" placeholder="Enter your username" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-email">Email</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-email" type="text" value="{{$user->email}}" name="email" placeholder="Enter your email" >
                                            </div>
                                        </div><div class="form-group row">
                                            <div class="col-md-9">
                                                <img width="100" src="{{ asset('storage/'.$user->image) }}" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-password">Image Change</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-password" type="file" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            @foreach($roles as $role)
                                                <div class="form-check">


                                                    <input id="{{$role->id}}" name="roles[{{ $role->id }}]" class="form-check-input" type="checkbox" value="{{ $role->id }}"
                                                           @foreach($role_id as $user_role)
                                                           @if($user_role->id == $role->id)
                                                           checked
                                                    @endif
                                                    @endforeach
                                                    >


                                                            <label for="{{$role->id}}" class="form-check-label">
                                                                {{ $role->name }}
                                                            </label>



                                                </div>
                                            @endforeach
                                        </div>


                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                            <a href="{{route('customer.index')}}"><button class="btn btn-sm btn-primary" type="button"> Back</button></a>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.row-->
                </div>
            </div>
        </main>
    </div>

@endsection


