@extends('layouts.user')
@section('content')

<h3 class="font-weight-light text-center">Welcome {{isset(Auth::user()->name) ? Auth::user()->name : ''}}</h3>

@endsection