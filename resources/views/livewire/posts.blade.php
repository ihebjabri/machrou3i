
<div>
     
<div class="container justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex">
                <b>Posts {{$num}} </b>
                <a href="javascript:void(0)" wire:click="create_post" class="btn btn-primary btn-sm ml-auto">   Create Post</a>
                <a href="javascript:void(0)" wire:click="add">+</a>
         
            </div>
     
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th> Image</th>
                            <th> Title </th>
                            <th> Owner</th>
                            <th> Category</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                             <tr> 
                                 <td> <img src="{{$post->image}}" alt="{{$post->title}}" style="width: 50px;" > </td>
                                 <td> <a href="javascript:void(0)" wire:click="show_post({{$post->id}})" >  {{$post->title}} </a> </td>
                                 <td> {{$post->user->name}} </td>
                                 <td> {{$post->category->name}} </td>
                                 <td>
                                     <a href="javascript:void(0)" wire:click="edit_post({{$post->id}})"  class="btn btn-primary btn-sm">Edit</a>
                                     <a href="javascript:void(0)" wire:click="delete_post({{$post->id}})"  class="btn btn-danger btn-sm" onclick="if (confirm('Are you sure?')){  document.getElementById('delete-{{$post->id}}').submit(); } else { return false;  }">Delete</a>
                                 
                                 </td>
                             </tr>
                        @endforeach
                    </tbody>
                </table>
               
                <div class="float-right">
                    {{$posts->links() }}
                </div>
              
            </div>
        
        </div>
    </div>
</div>
 
</div>



