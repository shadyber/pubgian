<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class AddToCartComponent extends Component
{

    public $id;


    public function mount($id)
    {
        $this->id=$id;
    }
    public function addToCart($id)
    {

        $product = Item::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
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

            $this->emitUp('countcart',0);
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            // return redirect()->back()->with('success', 'Product added to cart successfully!');
            return count(session()->get('cart'));

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "slug" => $product->slug,
            "id" => $product->id,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo,
            "thumb" => $product->thumb
        ];

        session()->put('cart', $cart);
        return count(session()->get('cart'));
        //    return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function render()
    {
        return view('livewire.add-to-cart-component');
    }
}
