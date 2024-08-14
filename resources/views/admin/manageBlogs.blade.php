@extends('admin.layout.masterlayout')
@section('content')
    <div class="mt-4 mb-5"
        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Qoute</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Blogs</li>
        </ol>
    </div>
    <div class="row mb-2">
        <div class="col">
            <a href="{{route('blog.create')}}" class="btn btn-primary">
                Add New
            </a>
        </div>
    </div>
    <div class="card border-0 shadow">
        <div class="card-header bg-info bg-opacity-25 border-bottom border-info">
            <div class="card-title">
                <h4 class="text-info">All Blogs</h4>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @if (count($blogs)>0)
                        
                    @foreach ($blogs as $value)
                        <tr>
                            <th scope="row">{{ $count }}</th>
                            <td> {{ $value->title }} </td>
                            <td> {{ $value->category }} </td>
                            <td> {{ $value->tag }} </td>
                            <td class="text-center">
                                <form action="{{route('blog.destroy',$value->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('blog.show', $value->id) }}" class="text-warning fs-5">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                    <a href="{{ route('blog.edit',$value->id) }}" class="text-success fs-5">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <button type="submit" class="text-danger fs-5 btn">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                    @else
                    <tr class="text-center">
                        <td class="text-danger" colspan="5">
                            No Result
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
