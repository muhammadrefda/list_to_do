@extends('layout.app')
@section('title' , 'Category')
@section('wp-content')

    <div class="content">

    <h3>Category</h3>

    <div class="modal-button mt-3 mb-3">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-check-square"> Insert</i>
    </button>
    </div>

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


          <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Insert</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                  
            <form action="/category/tambah" class="form-horizontal style-form" enctype="multipart/form-data" method="post">
                @method('post')
                @csrf
           
    
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control round-form @error('name') is-invalid @enderror" id="name" name="name">
                    @error('name')
                      <div class="invalid-feedback">
                        {{$message}}
                    </div>
                      @enderror
                    </div>
                </div>
    
    
    
             
    
                <div class="modal-footer">
                  
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Insert</button>
                </div>

              </form>
          </div>
          </div>
        </div>
      </div>

@endsection