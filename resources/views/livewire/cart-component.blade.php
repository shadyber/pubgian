<div>

    <div class="cart-body-content">
        <div class="row">
            <div class="col-xl-8">

                <div class="product-content">
                    <form  wire:submit.prevent="updateAllCart(Object.fromEntries(new FormData($event.target)))">
                        <div class="table">

                                @foreach($carts as $id=>$cart )
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <a href="/item/{{$cart['slug']}}">
                                                    <img src="{{$cart['thumb']}}" class="img-fluid rounded-3" alt="Shopping item {{$cart['name']}}" style="width: 65px;">
                                                    </a> </div>
                                                <div class="ms-3">
                                                    <h5>{{$cart['name']}}</h5>
                                                    <p class="small mb-0"><input  name="cartsQnt{{$id}}"   type="number" value="{{$cart['quantity']}}"> </p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">{{$cart['quantity']}}</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$ETB {{$cart['price']* $cart['quantity']}}</h5>
                                                </div>
                                                <a href="#!" style="color: #cecece;"  wire:click="removeCart({{$cart['id']}})" ><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach


                        </div>
                        <div class="cupon">
                                <p>Click Update Cart if you do Quantity Changes</p>
                            <button class="generic-btn border-0 red-hover-btn text-uppercase float-right" type="submit">Update Cart</button>

                        </div></form>

                </div>
            </div>
            <div class="col-xl-4">
                <div class="cart-widget">
                    <h4 class="title">Cart Totals</h4>
                    <table class="table table-2 no-border">
                        <tbody>
                        <tr>
                            <th>Subtotal</th>
                            <td>$ETB {{\App\Models\Cart::totalCart()}}</td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td>
                                <h6>Flat rate</h6>
                                <p>Shipping options will be updated during checkout.</p>
                                <a href="javascript:void(0)" class="price-calculate">Calculate shipping</a>
                                <div class="calculate-shipping-box">
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <div class="cart-select">
                                                <select name="country" id="country">
                                                    <option value="uk">United Kingdom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Country">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Town / City">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" placeholder="Post Code">
                                        </div>
                                        <div class="form-group">
                                            <button class="generic-btn border-0 red-hover-btn text-uppercase ">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td><strong>$ETB {{\App\Models\Cart::totalCart()}}</strong></td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="/checkout" class="mt-40 generic-btn red-hover-btn w-100 d-block" style="height: 50px;">Procced to checkout</a>
                </div>
                <!-- /. cart widget -->
            </div>
        </div>
    </div>

</div>
