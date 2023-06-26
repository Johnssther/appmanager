<?php

namespace App\Http\Livewire\Inventary\Categories;

use Livewire\Component;
use App\Models\Inventary\Category;

class CreateCategory extends Component
{
    public $open;
    public $isEdit;
    public Category $category;

    protected $rules = [
        'category.name' => 'required|max:255',
    ];

    protected $listeners=['createCategory' => 'createCategory'];

    public function render()
    {
        return view('livewire.inventary.categories.create-category');
    }

    public function mount()
    {
        $this->category = new Category();
    }

    public function createCategory()
    {
        $this->open = true;
        $this->isEdit = false;
    }

    public function closeModal() 
    {
        $this->isEdit = false;
        $this->open = false;
    }

    public function submit()
    {
        $this->validate();
        $this->isEdit ? $this->update() : $this->store();
    }

    public function store()
    {
        // Create category
        $category = $this->category;
        $category->save();

        $this->reset(['open', 'isEdit']);
        $this->category = new Category();
        $this->emitTo('inventary.categories.index-categories', 'render');
    }

    public function update()
    {
        // Edit category
        $category = $this->category;
        $category->save();

        $this->reset(['open', 'isEdit']);
        $this->category = new Category();
        $this->emitTo('inventary.categories.index-categories', 'render');
    }

    
}
