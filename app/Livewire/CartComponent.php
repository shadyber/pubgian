<?php

namespace App\Livewire;

use Livewire\Component;

class CartComponent extends Component
{


public  $carts;

    public function changeCartQnt($cartid){

        request('qnt'.$cartid);
    }


    public function removeCart($id){

        $cart=session()->get('cart');
        if(!$cart){

        }else if(!$cart[$id]){
            return redirect()->back();
        }
        if($cart[$id]){
            unset($cart[$id]);
        }
        session()->put('cart',$cart);

    }

    public function updateAllCart(){

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
