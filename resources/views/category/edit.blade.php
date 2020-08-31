@extends('layout.app')
@section('title' , 'Edit Category')
@section('wp-content')

    <div class="content">
    
        <h3>Edit Category</h3>

        <div class="form-edit">
        <form action="/category/{{$categories->id}}" method="POST">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $categories->name}}">
        </div>
           <button type="submit" class="btn btn-success text-center">Update</button>
        </form>
        </div>

    </div>

@endsection