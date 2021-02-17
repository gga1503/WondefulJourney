@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6 col-sm-5 col-6 mt-4 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="/delete/{{$user->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Delete this account?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection