<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Reserva,Cliente};

class SearchCliente extends Component
{
    public $items = [];
    public $itemSelected;
    public $search;

    protected $listeners = [
        'setItemSelected' => 'setItemSelected'
    ];

    public function setItemSelected($item)
    {
        $this->itemSelected = $item;
    }

    public function render()
    {
        $this->items = [
            ['id' => 1, 'nombre' => 'item numero uno'],
            ['id' => 1, 'nombre' => 'item numero uno'],
            ['id' => 1, 'nombre' => 'item numero uno'],
        ];

        return view('livewire.search-cliente');
    }

    public function selectCliente($id, $nombre)
    {
        $this->itemSelected = $id;
        $this->search = $nombre;

        $this->emitTo('reservas.create-reserva', 'selectCliente', $id);
    }
}
