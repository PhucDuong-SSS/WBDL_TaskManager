@extends('modules.master')
@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><strong>Insert User</strong> Form</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="{{route('customer.store')}}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-name">Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-name" type="text" name="name" placeholder="Enter your name" autocomplete="email"><span class="help-block">Please enter your email</span>
                                            </div>
                                        </div> <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-username">User Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-username" type="text" name="username" placeholder="Enter your username" ><span class="help-block">Please enter your email</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-password">Password</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-password" type="password" name="password" placeholder="Enter Password.." autocomplete="current-password"><span class="help-block">Please enter your password</span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
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


