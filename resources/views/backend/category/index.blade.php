@extends('backend.layout.master')

@section('title','Create Categories')

@section('content')

        <div class="row">
          
            <div class="col-md-8">
              <a class="btn btn-info btn-sm" href="{{ route('categories.create') }}">Create Categories</a>
                <h1>All Category</h1>
                
  <table class="table table-bordered table-hover table-striped text-center">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ( $categories as $category )
        <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $category->name }}</td>
      <td>{{ $category->description }}</td>
      <td>
         <a  class="btn btn-info btn-sm" href="{{ route('categories.show', $category->id) }}">Show Details</a>
         <a  class="btn btn-info btn-sm" href="{{ route('categories.edit', $category->id) }}">Edit</a>
         <form class="d-inline-block" action="{{ route('categories.destroy', $category->id) }}" method="post">
          @csrf
          @method('delete')
          <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete data?')">Delete</button>
         </form>
      </td>
    </tr>
    @endforeach
    
   
  </tbody>
</table>          
                
            </div>
            </div>

@endsection





