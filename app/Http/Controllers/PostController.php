<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
class PostController extends Controller
{

    public function __construct()
    {
      //  $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('frontend.show-2', compact('posts')); 
    }


    public function index_livewire()
    {
        
        return view('frontend.index_livewire'); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('frontend.create', [
            'categories' => Category::all(), 
        ]); 


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); 

        $rules = [
            'title' => 'required', 
            'category' => 'required', 
            'body' => 'required', 
            'image' => 'nullable|mimes:jpg ,jpeg, gif, png | max:20000', 
        ]; 

        $messages = [
            'title.required' => 'title is required', 
            'category.required' => 'category is required', 
            'body.required' => 'body is required', 
        ]; 

        $validation = Validator::make($data, $rules, $messages); 
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation->errors())->withInput(); 
        }

        if($image = $request->file('image'))
        {
            
            $filename = Str::slug($request->title).'.'.$image->getClientOriginalExtension(); 
            $path = public_path('/assets/images/'.$filename); 
            Image::make($image->getRealPath())->save($path, 100); 
        }
        
        $post = Post::create([
            'title' => $data['title'],  
            'body' => $data['body'], 
            'user_id' => Auth::id(),
            'category_id' => $data['category'], 
           'image' => isset($path) ? $path : null,  
        ]);

        return redirect()->route('posts.index')->with([
            'message' => 'Post creatd successfuly', 
            'alert-type' => 'success', 
        ]); 
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id); 

        if(isset($post))
        {
          return view('frontend.show', [
                'post' => Post::find($id), 
            ]);  
        }else{
            return redirect()->route('posts.index')->with([
                'message' => 'Access Denied to continue the process', 
                'alert-type' => 'danger', 
            ]); 
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $post = Post::find($id); 

        if(isset($post))
        {
          return view('frontend.edit', [
                'post' => Post::find($id), 
                'categories' => Category::all(), 
            ]);  
        }else{
            return redirect()->route('posts.index')->with([
                'message' => 'Access Denied to continue the process', 
                'alert-type' => 'danger', 
            ]); 
        }
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = $request->all(); 

        $rules = [
            'title' => 'required', 
            'category' => 'required', 
            'body' => 'required', 
            'image' => 'nullable|mimes:jpg ,jpeg, gif, png | max:20000', 
        ]; 

        $messages = [
            'title.required' => 'title is required', 
            'category.required' => 'category is required', 
            'body.required' => 'body is required', 
        ]; 

        $validation = Validator::make($data, $rules, $messages); 
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation->errors())->withInput(); 
        }

        $post = Post::find($id); 

     
       if(isset($post))
        {
            if($image = $request->file('image'))
            {
                
                if(File::exists($post->image))
                {
                    unlink($post->image); 
                }
                
                $filename = Str::slug($request->title).'.'.$image->getClientOriginalExtension(); 
                $path = public_path('/assets/images/'.$filename); 
                Image::make($image->getRealPath())->save($path, 100); 
            }
        
            
            $post->title = $data['title']; 
            $post->body  = $data['body']; 
            $post->category_id = $data['category']; 
            $post->image = isset($path) ? $path : $post->image; 
            $post->update(); 

            return redirect()->route('posts.index')->with([
                'message' => 'Post updated successfuly', 
                'alert-type' => 'success', 
            ]); 
        }

        return redirect()->route('posts.index')->with([
            'message' => 'Access Denied to continue the process', 
            'alert-type' => 'danger', 
        ]); 
       
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id); 

       if(isset($post))
         {
            if($image = $post->image != '')
            {
                 if(File::exists($post->image))
                {
                    unlink($post->image); 
                }
           }


             $post->delete(); 
 
             return redirect()->route('posts.index')->with([
                 'message' => 'Post updated successfuly', 
                 'alert-type' => 'success', 
             ]); 
         }
 
         return redirect()->route('posts.index')->with([
             'message' => 'Access Denied to continue the process', 
             'alert-type' => 'danger', 
         ]); 
        
    
    }
}
