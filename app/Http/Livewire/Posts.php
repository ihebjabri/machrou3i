<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Posts extends Component
{
    public $num = 10 ; 
    use WithPagination ; 
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $posts = Post::paginate(5);

        return view('livewire.posts',[
            'posts' => $posts
        ])->layout('layouts.app');
    }

    public function create_post()
    {
        return redirect()->to('/livewire/posts/create'); 
    }

    public function add()
    {
        $this->num ++ ; 
    }
}
