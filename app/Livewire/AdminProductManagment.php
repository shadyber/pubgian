<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class AdminProductManagment extends Component
{
    public $items;

    public function render()
    {
        $this->items=Item::all();
        return view('livewire.admin-product-managment');
    }
}
