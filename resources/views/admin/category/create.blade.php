@extends('layouts.app')

@section('content')
<div class="panel panel-defaul">
@include('admin.includes.errors');
    <div class="panel-head">
    Create new category
    </div>
    <div class="panel-body">
        <form action="{{route('category.store')}}" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="category">category</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-success " type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection