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
              <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" value="{{old('title', $post->title)}}">
                  @error('title')
                  <span class="text-danger"> {{$message}} </span>
                  @enderror
              </div>


              <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{ old('category', $post->category_id) == $category->id ? 'selected' : '' }} > {{$category->name}} </option>
                    @endforeach
                </select>
                @error('category')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="" cols="30" rows="5" class="form-control" > {{old('body', $post->body)}} </textarea>
                @error('body')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>


            @if($post->image !== '')
                <div class="form-group">
                    <img src="{{asset($post->image)}}" alt="">
                </div>
            @endif

            <div class="form-group">
                <label for="title">image</label>
                <input type="file" class="form-control" name="image"  class="custom-file" >
                @error('image')
                <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-primary" >Update Post</button>
            </div>



            </form>
              
            </div>
        
        </div>
    </div>
</div>
 
@endsection
