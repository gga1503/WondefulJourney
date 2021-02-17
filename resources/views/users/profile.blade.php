@extends('layouts.user')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-5 mt-4 mb-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Update Profile
            </div>
            @if(Session::has('flash_message_error'))
            <div class="alert alert-danger alert-block" role="alert">
                {!! session('flash_message_error') !!}
            </div>
            @endif
            <div class="card-body">
                <form action="/profile" method="PUT" class="px-2">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtName" class="col-form-label font-weight-bold">Name:</label>
                        <input type="name" class="form-control" name="name" id="txtName">
                    </div>

                    <div class="form-group">
                        <label for="txtEmail" class="col-form-label font-weight-bold">E-Mail:</label>
                        <input type="email" class="form-control" name="email" id="txtEmail">
                    </div>


                    <div class="form-group">
                        <label for="txtPhone" class="col-form-label font-weight-bold">Phone:</label>
                        <input type="phone" class="form-control" name="phone" id="txtPhone">
                    </div>

                    <div class="text-center">
                        <button class="btn btn-info mt-3" type="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection