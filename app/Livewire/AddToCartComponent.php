<?php

namespace App\Livewire;

use Livewire\Component;
use function Livewire\Features\SupportTesting\refresh;

class AddToCartComponent extends Component
{
    public $itemid;


    public function mount ($itemid){

        $this->itemid=$itemid;
        return 0;
    }

    public function  addCounter() {
        $this->dispatch('addCartCount');
    }

    public function render()
         {
        return view('livewire.add-to-cart-component');
    }
}
