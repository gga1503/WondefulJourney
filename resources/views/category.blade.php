@extends('layouts.beforeLogin')
@section('content')

<h1 class="display-4 text-center mb-3">{{$category->name}}</h1>
<div class="row justify-content-center mb-4">

    @foreach($category->articles as $article)
    <?php $description = substr($article->description, 0, 135); ?>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                {{$description}}
                <a href="/full_story/{{$article->id}}" class="font-italic text-decoration-none italic-link">..full story</a>
                <div class="row justify pl-3 mt-2">
                    <p class="font-italic italic-category">Category : </p>&nbsp;

                    <a href="/category/{{$category->id}}" class="font-italic text-decoration-none italic-link">{{$category->name}}</a>


                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection