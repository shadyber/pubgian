<?php

namespace App\Livewire;

use App\Http\Controllers\CartController;
use http\Client\Request;
use Livewire\Component;

class CartComponent extends Component
{


public  $carts;



    public function removeCart($id){

        $cart=session()->get('cart');
        if(!$cart){

        }else if(!$cart[$id]){
            return redirect()->back();
        }
        if($cart[$id]){
            unset($cart[$id]);
            $this->dispatch('$refresh');
        }
        session()->put('cart',$cart);
        $this->dispatch('$refresh');

    }

    public function updateAllCart($formdata){

      foreach ($this->carts as $id=>$cart){
$this->carts[$id]["quantity"]=$formdata['cartsQnt'.$id];
          session()->put('cart', $this->carts);

 $this->dispatch('$refresh');

      }
    }

    public function refreshComponent(){
        $this->dispatch('$refresh');
    }

    public function render()
    {
        $this->carts=\App\Models\Cart::myCart();

        return view('livewire.cart-component');
    }
}
