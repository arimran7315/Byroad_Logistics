@extends('admin.layout.masterlayout')
@section('content')
    <div class="mt-4 mb-5"
        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
        </ol>
    </div>
    <div class="card shadow">
        <div class="card-header">
            <h4>Edit Blog</h4>
        </div>
        <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="card-body">
            <div class="row my-4 text-center">
                <div class="col">
                    <img src="{{asset('/storage/'.$blog->image)}}" id="img" class="rounded-circle w-25 img-thumbnail" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <input type="text" class="form-control" name="category" value="{{$blog->category}}">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="form-group">
                        <label for="tag">tag:</label>
                        <input type="text" class="form-control" name="tag" value="{{$blog->tag}}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" name="blogImage" value="{{$blog->image}}" onchange="document.querySelector('#img').src=window.URL.createObjectURL(this.files[0])">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="10">{{$blog->description}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection
