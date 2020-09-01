@extends('layout.app')
@section('title' , 'Data User')
@section('wp-content')


    <div class="content">
        <h3> Data User</h3>


        <div class="data-table">
    
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Email</th>
            <th scope="col">name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach($user as $user)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $user->email}}</td>
            <td>{{ $user->name}}</td>
            <td>
                <img src="{{ asset('wp-list/image/' . $user->image )  }}" alt="image-user" style="width:50px;">
            </td>
            <td>
          
                      <a href="#" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-info"></i>
                        </a>
                    
            </td>
          </tr>
        
        @endforeach
        </tbody>
    </table>

    </div>


    </div>


@endsection
