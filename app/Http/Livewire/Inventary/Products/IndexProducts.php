<?php

namespace App\Http\Livewire\Inventary\Products;

use Livewire\Component;
use App\Models\Inventary\Product;

class IndexProducts extends Component
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
        $query = Product::query();
        $query->where('name', 'like', '%'. $this->search .'%');
        $query->orWhere('id', 'like', '%'. $this->search .'%');
        $query->orderby($this->sort, $this->direction);
        $products = $query->paginate($this->cant);

        return view('livewire.inventary.products.index-products', ['products' => $products]);
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

    public function delete(Product $product)
    {
        $product->delete();
    }
}
