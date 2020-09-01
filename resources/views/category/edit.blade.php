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



        <div class="button mt-5 text-center">
                    <a href="/category" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i></a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-user-edit"> Update</i></button>
       </div>
    
        </form>
        </div>

    </div>

@endsection