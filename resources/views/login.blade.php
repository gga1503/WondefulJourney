@extends('layouts.beforeLogin')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5 mt-4 mb-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Login
            </div>
            @if(Session::has('flash_message_error'))
            <div class="alert alert-danger alert-block" role="alert">
                {!! session('flash_message_error') !!}
            </div>
            @endif
            <div class="card-body">
                <form action="/login" method="post" class="px-2">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="chooseRole" class="font-weight-bold">Login as:</label>
                        <select class="form-control" name="role">
                            <option value='Admin'>Admin</option>
                            <option value='User'>User</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="txtEmail" class="col-form-label font-weight-bold">E-Mail:</label>
                        @if(Session::has('email'))
                        <input type="email" class="form-control" name="email" id="txtEmail" value="{{Session::get('email')['email']}}">
                        @else
                        <input type="email" class="form-control" name="email" id="txtEmail">
                        @endisset
                    </div>

                    <div class="form-group">
                        <label for="txtPassword" class="col-form-label font-weight-bold">Password:</label>
                        @if(Session::has('password'))
                        <input type="password" class="form-control" name="password" id="txtPassword" value="{{Session::get('password')['password']}}">
                        @else
                        <input type="password" class="form-control" name="password" id="txtPassword">
                        @endisset
                    </div>
                    <div class="text-center">
                        <button class="btn btn-info mt-3" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection