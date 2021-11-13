<div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
     @endif
 
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" wire:model="title" >
            @error('title')
            <span class="text-danger"> {{$message}} </span>
            @enderror
        </div>

        <div class="text-center">
            <button class="btn btn-primary btn-block"  wire:click.prevent="addTask" >Create</button>
        </div>

</div>
