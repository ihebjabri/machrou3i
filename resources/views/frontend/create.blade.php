@extends('layouts.app')

@section('content')
 
<div class="container justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex">
                <b> Create New Post</b>
                <a href="{{route('posts.index')}}" class="btn btn-primary btn-sm ml-auto">    Posts</a>
         
            </div>
     
            <div class="card-body">
              <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" value="{{old('title')}}">
                  @error('title')
                  <span class="text-danger"> {{$message}} </span>
                  @enderror
              </div>


              <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{ old('category') == $category->id ? 'selected' : '' }} > {{$category->name}} </option>
                    @endforeach
                </select>
                @error('category')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="" cols="30" rows="5" class="form-control" > {{old('body')}} </textarea>
                @error('body')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="title">image</label>
                <input type="file" class="form-control" name="image"  class="custom-file" >
                @error('image')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-primary" >Save</button>
            </div>



            </form>
              
            </div>
        
        </div>
    </div>
</div>
 
@endsection
