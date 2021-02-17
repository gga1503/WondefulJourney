@extends('layouts.user')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6 col-sm-5 col-6 mt-4 ">
        <a href="/create_blog" class="btn btn btn-info">+ Create Blog</a>
        <table class="table text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td><a href="/full_story/{{$article->id}}" class="text-decoration-none link">{{$article->title}}</a></td>
                    <td><a href="/delete/{{$article->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Delete this article?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination justify-content-center">
            {{$articles->links()}}
        </div>
    </div>
</div>
@endsection