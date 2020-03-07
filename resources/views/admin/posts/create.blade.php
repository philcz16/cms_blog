@extends('layouts.app');

@section('content')
<div class="panel panel-default">
    @if(count($errors)>0)
        <ul class="list-group">
        @foreach ($errors->all() as $error)
            <li class="list-group-item text-danger">
                {{$error}}
            </li>
        @endforeach
        </ul>
    @endif
    <div class="panel-heading">
        Create a new post
    </div>
    
    <div class="panel-body">
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field() }}

            <div class="form-group">

                <label for="title">Title</label>
                <input type="text" class="form-control" value="" name="title" placeholder="Enter the title of the post">
            </div>
            <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" class="form-control" value="" name="featured">
            </div>
            <div class="form-group">
                <label for="content">Post</label>
                <textarea name="content" id="content" cols="10" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </div>
            </form>
    </div>
</div>
@endsection