<?php

namespace App\Livewire;

use App\Models\Item;
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



        $product = Item::find($this->itemid);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $this->itemid => [
                    "id" =>$product->id,
                    "slug"=>$product->slug,
                    "name" => $product->name,
                    "quantity" => 1,
                    "verity" => '0',
                    "price" => $product->price,
                    "photo" => $product->photo,
                    "thumb" => $product->thumb
                ]
            ];

            session()->put('cart', $cart);
            return count(session()->get('cart'));
            //return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$this->itemid])) {

            $cart[$this->itemid]['quantity']++;

            session()->put('cart', $cart);

            // return redirect()->back()->with('success', 'Product added to cart successfully!');
            return count(session()->get('cart'));

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$this->itemid] = [
            "name" => $product->name,
            "slug" => $product->slug,
            "id" => $product->id,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo,
            "thumb" => $product->thumb
        ];

        session()->put('cart', $cart);

    $this->dispatch('addCartCount');

    }

    public function render()
         {
        return view('livewire.add-to-cart-component');
    }
}
