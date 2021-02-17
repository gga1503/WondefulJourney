@extends('layouts.beforeLogin')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5 mt-4 mb-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Register
            </div>
            @if(Session::has('flash_message_error'))
            <div class="alert alert-danger alert-block" role="alert">
                {!! session('flash_message_error') !!}
            </div>
            @endif
            <div class="card-body">
                <form action="/sign_up" method="post" class="px-2">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtName" class="col-form-label font-weight-bold">Name: </label>
                        <input type="text" class="form-control" name="name" id="txtName">
                    </div>

                    <div class="form-group">
                        <label for="txtEmail" class="col-form-label font-weight-bold">E-Mail:</label>
                        <input type="email" class="form-control" name="email" id="txtEmail">
                    </div>

                    <div class="form-group">
                        <label for="txtPhone" class="col-form-label font-weight-bold">Phone:</label>
                        <input type="phone" class="form-control" name="phone" id="txtPhone">
                    </div>
                    <div class="form-group">
                        <label for="txtPassword" class="col-form-label font-weight-bold">Password</label>
                        <input type="password" class="form-control" name="password" id="txtPassword">
                    </div>

                    <div class="form-group">
                        <label for="txtConfirmPassword" class="col-form-label font-weight-bold">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmed_password" id="txtConfirmPassword">
                    </div>

                    <div class="text-center">
                        <button class="btn btn-info mt-3" type="signUp">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection