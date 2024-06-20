<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
class Cart extends Component
{
    public  $cart_counter;


      #[On('addCartCount')]
      public function addCartCount (){
          $this->cart_counter++;
      }
     public function render()
    {
        $this->cart_counter=count(\App\Models\Cart::myCart());
        return view('livewire.cart');
    }
}
