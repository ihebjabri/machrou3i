<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class CreateTask extends Component
{
    public $title ; 

    protected $rules = [
        'title' => 'required|min:6'
    ]; 

    public function render()
    {
        return view('livewire.create-task');
    }

    public function addTask()
    {
        $this->validate(); 
        
        Task::create([
            'title' => $this->title, 
            'status' => 0 , 
        ]); 

        $this->title = ''; 
        $this->emit('taskAdded'); 

        session()->flash('message', 'Task added successfuly !'); 
    }
}
