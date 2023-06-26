<?php

namespace App\Http\Livewire\Inventary\Products;

use Livewire\Component;
use App\Models\Inventary\{Product,Category};

class CreateProduct extends Component
{
    public $open = true;
    public $isEdit;
    public Product $product;

    protected $rules = [
        'product.name' => 'required|max:255',
        'product.units' => 'required|integer',
        'product.color' => 'nullable|max:255',
        'product.size' => 'required|',
        'product.price_in' => 'required',
        'product.price_out' => 'required',
        'product.sku' => 'required',
        'product.description' => 'required',
        'product.barcode' => 'nullable',
        'product.isActive' => 'nullable',
        'product.user_id' => 'nullable',
        'product.category_id' => 'required',
    ];

    public function render()
    {
        $categories = Category::get();
        return view('livewire.inventary.products.create-product', compact('categories'));
    }

    public function mount()
    {
        $this->product = new Product();
    }

    public function submit()
    {
        $this->validate();
        $this->isEdit ? $this->update() : $this->store();
    }

    public function store()
    {
        // Create product
        $product = $this->product;
        $product->user_id = 1;
        $product->isActive = true;
        $product->save();

        $this->reset(['open', 'isEdit']);
        $this->product = new Product();
        $this->emitTo('inventary.products.index-products', 'render');
        return redirect()->route('products');
    }
}
