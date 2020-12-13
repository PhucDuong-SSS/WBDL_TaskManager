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
                                    <form class="form-horizontal" action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-name">Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control @error('name') is-invalid @enderror " id="hf-name" type="text" value="{{old('name')}}" name="name" placeholder="Enter your name" autocomplete="email">
                                                @error('name')
                                                <div class="alert ">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-username">User Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control @error('username') is-invalid @enderror "  id="hf-username" type="text" value="{{old('username')}}" name="username" placeholder="Enter your username" >
                                            </div>
                                            @error('username')
                                            <div class="alert ">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-email">Email</label>
                                            <div class="col-md-9">
                                                <input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}"  id="hf-email" type="text" name="email" placeholder="Enter your email" >
                                            </div>
                                            @error('email')
                                            <div class="alert ">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            @foreach($roles as $role)
                                                <div class="form-check">
                                                    <input name="roles[{{ $role->id }}]" class="form-check-input" type="checkbox" value="{{ $role->id }}">
                                                    <label class="form-check-label">
                                                        {{ $role->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-password">Password</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-password" type="password" name="password" placeholder="Enter Password.." autocomplete="current-password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-password">Image</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-password" type="file" name="image">
                                            </div>
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


