<?php

namespace App\Http\Livewire\Inventary\Categories;

use App\Models\Inventary\Category;
use Livewire\Component;

class IndexCategories extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = 10;

     /**
     * Listeners.
     */
    protected $listeners=['render' => 'render', 'delete' => 'delete'];

    public function render()
    {
        $query = Category::query();
        $query->where('name', 'like', '%'. $this->search .'%');
        $query->orWhere('id', 'like', '%'. $this->search .'%');
        $query->orderby($this->sort, $this->direction);
        $categories = $query->paginate($this->cant);
        
        return view('livewire.inventary.categories.index-categories', ['categories' => $categories]);
    }

    public function order($sort)
    {
        if ($this->sort==$sort) 
        {
            if ($this->direction=='desc'){
                $this->direction='asc';
            }
            else{
                $this->direction='desc';
            }

        } else {
            $this->sort=$sort;
            $this->direction=='asc';
        }
    }

    public function delete(Category $category)
    {
        $category->delete();
    }
}
