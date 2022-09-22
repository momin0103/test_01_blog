@extends('backend.layout.master')

@section('title','Edit Categories')
        
@section('content')

<div class="row">
     
            <div class="col-md-6">
                <h1>Edit Category</h1>
                
                    <a href="{{ route('categories.index') }}">All Post</a>
               
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="from-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $category->name }}" name="name" placeholder="Category Name"> 
                    </div>
                    <div class="from-group">
                        <label for="name">Category Description</label>
                        <input type="text" class="form-control" id="name" value="{{ $category->description }}" name="description" placeholder="Category Description"> 
                    </div>
                    <div class="from-group">
                        <input type="submit" class="btn btn-success" value="Update"> 
                    </div>
                </form>
            </div>
        </div>


        @endsection


