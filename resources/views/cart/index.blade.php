<x-app-layout>
    <x-slot name="header">

        {{ __('Dashboard') }}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container container-1430">


                    <div class="cart-body-content">
                        <div class="row">
                            <div class="col-xl-8">

                                <div class="product-content">
                                    <form action="#">
                                        <div class="table-responsive">
                                            <table class="table table-2">
                                                <thead>
                                                <tr>
                                                    <th class="remove-porduct"></th>
                                                    <th class="product-image"></th>
                                                    <th class="product-title">Product</th>
                                                    <th>Price</th>
                                                    <th class="quantity">Quantity</th>
                                                    <th class="total">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="table-data">
                                                            <button class="close-btn"><i class="fal fa-times"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <img src="img/product/1.jpg" width="80" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <h6><a href="single-product-3.html" class="title">Blandit vel eros condimentum ulla</a></h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <span class="price">$90.00</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <input type="number" value="1" style="margin-right: 20px; width: 119px;">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <span class="total">$90.00</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-data">
                                                            <button class="close-btn"><i class="fal fa-times"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <img src="img/product/2.jpg" width="80" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <h6><a href="single-product-3.html" class="title">Blossom Porcelain Side Plates</a></h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <span class="price">$90.00</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <input type="number" value="1" style="margin-right: 20px; width: 119px;">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data">
                                                            <span class="total">$90.00</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="cupon">

                                            <input type="text" placeholder="Cupon code" class="text-left pl-3" style="margin-right: 20px; width: 119px;">
                                            <button class="generic-btn border-0 red-hover-btn text-uppercase">Apply Cupon</button>
                                            <button class="generic-btn border-0 red-hover-btn text-uppercase float-right">Update Cart</button>

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
                                            <td>$134.00</td>
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
                                            <td><strong>$134.00</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="checkout.html" class="mt-40 generic-btn red-hover-btn w-100 d-block" style="height: 50px;">Procced to checkout</a>
                                </div>
                                <!-- /. cart widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
