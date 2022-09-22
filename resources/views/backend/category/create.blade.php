@extends('backend.layout.master')

@section('title','All Categories')
        
@section('content')

<div class="row">
     
            <div class="col-md-6">
                <h1>Create Category</h1>
                
                    <a href="{{ route('categories.index') }}">All Post</a>
               
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="from-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Category Name"> 
                    </div>
                    <div class="from-group">
                        <label for="name">Category Description</label>
                        <input type="text" class="form-control" id="name" name="description" placeholder="Category Description"> 
                    </div>
                    <div class="from-group">
                        <input type="submit" class="btn btn-success" value="Submit"> 
                    </div>
                </form>
            </div>
        </div>


        @endsection


