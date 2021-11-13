<?php

namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class AppTasks extends Component
{
    protected $listeners = ['taskAdded' => '$refresh']; 

    public $newGroupLabel;
    use WithPagination ; 
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
       return view('livewire.app-tasks',[
            'groups' => Group::orderBy('position')->get(),
        ]);
    }

    public function removeTask($id)
    {
        Task::find($id)->delete();
        $this->emit('taskAdedd'); 
    }

    public function updateOrder($list)
    {
       //dd($list); 
        foreach($list as $item)
        {
            Task::find($item['value'])->update(['position' => $item['order']]); 
        }
    }

    public function removeGroup($id)
    {
        Group::find($id)->delete(); 
        $this->emit('taskAdded'); 

        session()->flash('message', 'Group removed successfuly !'); 
    }

    public function addTask($groupId , $title)
    {
       
        
        Task::create([
            'title' => $title, 
            'group_id' => $groupId
        ]); 

    
        $this->emit('taskAdded'); 

        session()->flash('message', 'Task added successfuly !'); 
    }

    public function addGroup()
    {
     
        
        Group::create([
            'label' => $this->newGroupLabel, 
          
        ]); 

        $this->newGroupLabel = ''; 
        $this->emit('taskAdded'); 

        session()->flash('message', 'Group added successfuly !'); 
    }

    public function updateTaskOrder($list)
    {
       // dd($list);
        foreach($list as $item)
        {
            foreach($item['items'] as $it)
            {
                 
                Task::find($it['value'])->update(['position' => $it['order'] , 'group_id' => $item['value']]); 
            }
         
        }  
    }

    public function updateGroupOrder($list)
    {
        foreach($list as $item)
        {
            Group::find($item['value'])->update(['position' => $item['order']]); 
        }  
    }
}
