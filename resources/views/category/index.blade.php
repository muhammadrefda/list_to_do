@extends('layout.app')
@section('title' , 'Category')
@section('wp-content')

    <div class="content">
    <h3>Category</h3>

    <div class="session">
        @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
        </div>

    <div class="data-table">
    
    <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Category_Id</th>
      <th scope="col">name</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
   @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $category->id}}</td>
      <td>{{ $category->name}}</td>
      <td>
      <!-- <a href="#" class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-info"></i>
                  </a> -->
                <a href="/category/{{ $category->id}}/edit" class="btn btn-warning btn-circle btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="/category/{{ $category->id}}" method="post" class="d-inline">
                     @method('delete')
                     @csrf
                      <button type="submit" class="btn btn-danger btn-circle btn-sm justify-content-end"><i class="fas fa-trash "></i></button>
                    </form>
      </td>
    </tr>
   
   @endforeach
  </tbody>
</table>

    </div>

    </div>

@endsection