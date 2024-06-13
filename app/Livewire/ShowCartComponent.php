<?php

namespace App\Livewire;

use Livewire\Component;

class ShowCartComponent extends Component
{
      public $cartcount;


    protected $listeners = ['countcart'];


    public function  mount(){
    $this->cartcount=count(\App\Models\Cart::myCart());
}



public function  countcart(){
        print ('called');
    $this->cartcount=count(\App\Models\Cart::myCart());

}
    public function render()
    {
        return view('livewire.show-cart-component');
    }
}
