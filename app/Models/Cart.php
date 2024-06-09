<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',

    ];

    public static function myCart(){
        if(session()->get('cart')){

            return session()->get('cart');
        }else {
            return [];
        }
    }

    public static function totalCart(){
        if (session()->get('cart')){
            $total=0;
            foreach(session()->get('cart') as $cart){
                $total+=($cart['quantity'] * $cart['price']);
            }
            return $total;
        }else{
            return 0;
        }
    }

    public function __construct()
    {
        if($this->get() === null)
            $this->set($this->empty());
    }

    public function add(Product $product): void
    {
        $cart = $this->get();
        array_push($cart['products'], $product);
        $this->set($cart);
    }

    public function remove(int $productId): void
    {
        $cart = $this->get();
        array_splice($cart['products'], array_search($productId, array_column($cart['products'], 'id')), 1);
        $this->set($cart);
    }

    public function clear(): void
    {
        $this->set($this->empty());
    }

    public function empty(): array
    {
        return [
            'products' => [],
        ];
    }

    public function get(): ?array
    {
        return request()->session()->get('cart');
    }

    private function set($cart): void
    {
        request()->session()->put('cart', $cart);
    }


}
