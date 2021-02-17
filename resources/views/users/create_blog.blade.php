@extends('layouts.user')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 mt-4 mb-4">
        <div class="card" style="border: none;">
            <h4 class="card-text font-weight-bold text-center">New Blog</h4>
            @if(count($errors) > 0 )
            <div class="alert alert-danger">
                @foreach($errors->all () as $error)
                <p>{{$error}}</p>
                @endforeach
            </div>
            @endif
            <div class="card-body">
                <form action="/create_blog" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtTitle" class="font-weight-bold">Title:</label>
                        <input placeholder="Enter Title" type="text" class="form-control" name="title" id="txtTitle">
                    </div>


                    <div class="form-group">
                        <label for="category" class="font-weight-bold">Category:</label>
                        <select placeholder="Select Category" class="form-control" name="category_id" id="categorySelection">
                            <option value="0">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="txtChooseFile" class="font-weight-bold">Photo:</label>
                        <div>
                            <input type="file" class="form-control-file-center" name="image" id="txtChooseFile">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtProductDes" class="font-weight-bold">Story:</label>
                        <textarea type="text" class="form-control" rows="5" name="description" id="txtStory"></textarea>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-info mt-3" type="create">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection