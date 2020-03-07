@extends('layouts.app')

@section('content')
<div class="panel panel-defaul">
@if(count($errors)>0)
    <ul class="list-group">
    @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">
            {{$error}}
        </li>
    @endforeach
    </ul>
@endif
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