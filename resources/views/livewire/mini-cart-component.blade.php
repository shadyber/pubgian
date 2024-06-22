<div>
    <div class="minicart">
        <div class="minicart-body">
            <div class="minicart-content">
                <ul class="text-left">
                    <li><a href="#" wire:click="refresh()"><i class="fa fa-sync"></i></a></li>
                    @foreach($carts as $cart)
                        <li class="w-full">
                            <div class="minicart-img">
                                <a href="/item/{{$cart['slug']}}" class="p-0"><img src="{{$cart['thumb']}}" class="w-100" alt=""></a>
                            </div>
                            <div class="minicart-desc">
                                <a href="/item/{{$cart['slug']}}" class="p-0">{{$cart['name']}}</a>
                                <strong>{{$cart['quantity']}} × $ETB {{$cart['price']}}</strong>
                            </div>
                            <div class="remove">
                                <a href="#" wire:click="removeCart({{$cart['id']}})"><i class="fa fa-times"></i></a>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="minicart-checkout">
            <div class="mt-8 overflow-hidden minicart-checkout-heading mb-25">
                <strong class="float-left">Subtotal:</strong>
                <span class="float-right price">{{\App\Models\Cart::totalCart()}}</span>
            </div>
            <div class="minicart-checkout-links">
                <a href="/mycart" class="mb-20 generic-btn black-hover-btn text-uppercase w-100">View cart</a>
                <a href="/checkout" class="mb-20 generic-btn black-hover-btn text-uppercase w-100">Checkout</a>
            </div>
        </div>
    </div>
</div>
