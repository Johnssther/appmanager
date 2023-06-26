<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public $open = false;
    public $title, $content;

    protected $rules = [
        'title'=>'required',
        'content'=>'required',
    ];

    public function render()
    {
        return view('livewire.create-post');
    }

    public function store()
    {
        $this->validate();

        $post = new Post();
        $post->title = $this->title;
        $post->content = $this->content;
        $post->save();

        $this->title = '';
        $this->content = '';
        $this->open = false;
        $this->emit('render');
    }
}
