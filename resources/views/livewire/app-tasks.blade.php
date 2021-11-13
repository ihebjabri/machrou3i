<div>

    <div wire:sortable="updateGroupOrder" wire:sortable-group="updateTaskOrder" style="display: flex">
        @foreach ($groups as $group)
            <div wire:key="group-{{ $group->id }}" wire:sortable.item="{{ $group->id }}">
                <div style="display: flex">
                    <h4 wire:sortable.handle>{{ $group->label }}</h4>
    
                    <button wire:click="removeGroup({{ $group->id }})" class="btn btn-danger btn-sm">Remove</button>
                </div>
    
                <ul wire:sortable-group.item-group="{{ $group->id }}" class="list-group">
                    @foreach ($group->tasks()->orderBy('position')->get() as $task)
                        <li wire:key="task-{{ $task->id }}" wire:sortable-group.item="{{ $task->id }}"  class="list-group-item d-flex justify-content-between align-items-center" >
                            {{ $task->title }}
                            <button wire:click="removeTask({{ $task->id }})">Remove</button>
                        </li>
                    @endforeach
                </ul>
    
                <form wire:submit.prevent="addTask({{ $group->id }}, $event.target.title.value)">
                    <input type="text" name="title" class="form-control">
    
                    <button class="btn btn-primary btn-block">Add Task</button>
                </form>
            </div>
        @endforeach
    
        <form wire:submit.prevent="addGroup">
            <input type="text" wire:model="newGroupLabel" class="form-control">
    
            <button class="btn btn-primary btn-block" >Add Task Group</button>
        </form>
    </div>

    
   {{--  <ul class="list-group" wire:sortable="updateOrder">
        @foreach ($tasks as $task)
        <li class="list-group-item d-flex justify-content-between align-items-center"  wire:sortable.item="{{$task->id}}" wire:key="task-{{$task->id}}">
            {{$task->title}}

            <div class="d-flex float-right">
                <a href="" class="btn btn-primary btn-sm mr-1">
                    Edit
                </a>
              
                <a href="javascript:void(0)" wire:click="deleteTask({{$task->id}})" class="btn btn-danger btn-sm">
                    Delete
                </a>
            </div>
          
        </li>
        <br>
        @endforeach
      
      </ul>

--}}

    
    {{-- 
  <div class="d-flex float-right">
    {{ $tasks->links() }}
  </div>
  --}}

</div>

 

