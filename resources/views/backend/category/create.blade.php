@extends('backend.layout.master')

@section('title','All Categories')
        
@section('content')


<div class="row">
     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="col-md-4">

                {{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif   --}}
                <h1>Create Category</h1>
                
                    <a class="btn btn-success" href="{{ route('categories.index') }}">All Post</a>
               
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="from-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Category Name"> 
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
              
                    <div class="from-group">
                        <label for="name">Category Description</label>
                        <input type="text" class="form-control" id="name" name="description" placeholder="Category Description"> 
                    </div>
                      @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  
                    <div class="from-group">
                        <input type="submit" class="btn btn-success" value="Submit"> 
                    </div>
                </form>
            </div>
        </div>


        @endsection


