<x-guest-layout>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="container">
            <div class="col-md-12">
             Order Detail
            </div>

            <div class="w-full ">

                <section class="h-100 gradient-custom">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-10 col-xl-8">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header px-4 py-5">
                                        <h5 class="text-muted mb-0">Order By <span style="color: #a8729a;">{{$order->user->name}}</span>!</h5>
                                        <p> status: {{$order->status}}</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <p class="lead fw-normal mb-0" style="color: #a8729a;">Items In Order</p>
                                            <p class="small text-muted mb-0">Order ID : {{$order->id}}</p>
                                        </div>

                                        @foreach($order->getCart() as $cart)
                                        <div class="card shadow-0 border mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="{{$cart->thumb}}"
                                                             class="img-fluid" alt="Phone">
                                                    </div>
                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                        <p class="text-muted mb-0">{{$cart->name}}</p>
                                                    </div>
                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                        <p class="text-muted mb-0 small">  - </p>
                                                    </div>
                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                        <p class="text-muted mb-0 small">Unit Price : {{$cart->price}} $ETB </p>
                                                    </div>
                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                        <p class="text-muted mb-0 small">Qty: {{$cart->quantity}}</p>
                                                    </div>
                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                        <p class="text-muted mb-0 small">$ETB {{$cart->price * $cart->quantity}}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        @endforeach

                                        <hr>
                                        <div class="d-flex justify-content-between pt-2">
                                            <p class="fw-bold mb-0">Order Shpping Address</p>
                                            <p class="text-muted mb-0">

                                              <i class="fal fa-location-arrow"></i>  {{$order->address->city }}
                                                <a href="/user/{{$order->user->id}}"><i class="fal fa-user"></i></a>
                                            </p>
                                        </div>

                                        <div class="d-flex justify-content-between pt-2">
                                    @if($user->id==1)
                                             <p>{{$order->address->first_name}}  {{$order->address->last_name }}</p>
                                            <p>{{$order->address->city}}</p>
                                            <p>{{$order->address->state}}</p>
                                            <p>{{$order->address->street_address}}</p>
                                            <p>{{$order->address->phone}}</p>
                                            <p>{{$order->address->email}}</p>
                                            <p>{{$order->address->line1}}</p>
                                            <p>{{$order->address->postal_code}}</p>
                                            <p>{{$order->address->country_code}}</p>
                                            <p>{{$order->address->appartment_number}}</p>
                                            <p> </p>
                                        @endif
                                        </div>

                                        <hr>
                                        <div class="d-flex justify-content-between pt-2">
                                            <p class="fw-bold mb-0">Order Details</p>
                                            <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> $ETB {{\App\Models\Payment::find($order->payment_id)->amount}}</p>
                                        </div>

                                        <div class="d-flex justify-content-between pt-2">

                                            <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $0 ETB</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="text-muted mb-0">Invoice Date : {{$order->created_at->diffForHumans()}}</p>

                                        </div>

                                        <div class="d-flex justify-content-center">
                                            @if($user->id==1)
                                                <form  wire:submit.prevent="updateStatus(Object.fromEntries(new FormData($event.target)))">

                                                        <input type="hidden" value="{{$order->id}}" name="order_id" id="order_id">
                                                        <select name="status" id="id_status" >
                                                            <option
                                                                value="">Set Status</option>
                                                            <option value="created">Created</option>
                                                            <option value="processing">Processing</option>
                                                            <option value="in-route">In-route</option>
                                                            <option value="delivered">Delivered</option>

                                                        </select>
                                                        <x-button type="submit" > <i class="fal fa-save"></i> </x-button>


                                                </form>
                                            @endif
                                        </div>
                                        <div class="d-flex justify-content-between mb-5">

                                            <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 px-4 py-5"
                                         style="background-color: #2d2727; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                        <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                                            paid: <span class="h2 mb-0 ms-2">$ETB {{\App\Models\Payment::find($order->payment_id)->amount}}</span></h5>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-guest-layout>
