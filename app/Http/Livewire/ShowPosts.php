<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class ShowPosts extends Component
{
    use WithPagination;

    public string $uri = "https://ui-avatars.com/api/?name=P+D+H+J&color=7F9CF5&background=EBF4FF";
    public string $search = "";
    public string $sord = "id";
    public string $direction = "desc";
    public string $listgrid = "3";

    protected $listeners = ['render' => 'render'];
    
    public function render()
    {
        $query = Post::query();
        $query->where("title", 'like', '%'. $this->search . '%');
        $query->orWhere("content", 'like', '%'. $this->search . '%');
        $query->orderBy($this->sord, $this->direction);
        $data = $query->get();

        return view('livewire.show-posts', ['data' => $data]);
    }

    // metods
    public function order($sord) 
    {
        $this->sord = $sord;
    }
    public function direction($direction) 
    {
        $this->direction = $direction;
    }
    public function listgrid($listgrid) 
    {
        $this->listgrid = $listgrid;
    }
}
