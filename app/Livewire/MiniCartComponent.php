<?php

namespace App\Livewire;

use Livewire\Component;

class MiniCartComponent extends Component
{
    public  $carts;

    public function refresh (){
        $this->dispatch('$refresh');

    }


      public function removeCart($id){

          $cart=session()->get('cart');
          if(!$cart){
              return redirect()->back();
          }else if(!$cart[$id]){
              return redirect()->back();
          }
          if($cart[$id]){
              unset($cart[$id]);
          }
          session()->put('cart',$cart);

      }
    public function render()
    {
        $this->carts=\App\Models\Cart::myCart();
        return view('livewire.mini-cart-component');
    }
}
