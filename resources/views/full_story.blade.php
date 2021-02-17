@extends('layouts.beforeLogin')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12 col-sm-10 col-12 mt-4 mb-5 text-center">
        <h2 class="text-center">{{$articles->title}}</h2><br>
        <div class="text-center">
            <img src="{{asset('images/'.$articles->image)}}" class="img-fluid rounded mx-auto d-block mb-4">
        </div>
        <p class="mb-4 mx-4 full-story-text">
            {{$articles->description}}
        </p>
        <a href="{{ url()->previous() }}" class="btn btn-info btn-lg">Back</a>
    </div>
</div>
@endsection