<div>

    <div class="xl:px-10" data-path="0.0.2.0.0.1">
        @if(!empty($successMessage))
            <div class="alert alert-success">
                {{ $successMessage }}
            </div>
        @endif
@foreach($orders as $order)

            <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12">
                            <div class="card card-stepper" style="border-radius: 16px;">

                                <div class="card-body p-5">


                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <div>

                                            <h5 class="mb-0">INVOICE <span class="text-primary font-weight-bold">#ORDR0-{{$order->id}}</span>  </h5>

                                           @if($user->id==1) <form  wire:submit.prevent="updateStatus(Object.fromEntries(new FormData($event.target)))">
                                            <div class="row justify-items-center row">

                                                        <input type="hidden" value="{{$order->id}}" name="order_id" id="order_id">
                                                     <select name="status" id="id_status" class="col-sm-6 text-xs">
                                                    <option
                                                        value="">Set Status</option>
                                                    <option value="created">Created</option>
                                                    <option value="processing">Processing</option>
                                                    <option value="in-route">In-route</option>
                                                    <option value="delivered">Delivered</option>

                                                </select>
                                                        <x-button type="submit" class="col-sm-4 text-xs" > <i class="fal fa-save"></i> </x-button>

                                            </div>
                                            </form>
                                               @endif
                                        </div>
                                        <div class="text-end">
                                            <p class="mb-0">Expected Arrival <span>{{$order->created_at ->addDays(31)->diffForHumans()}}</span></p>
                                            <p> @foreach ($order->getCart() as $c)
                                                <span> <img src="{{$c->thumb}}" alt="{{$c->name}}" width="32px" height="32px" class="product-thumbnail card inline" > </span>
                                                @endforeach
                                            </p>

                                        </div>
                                    </div>

                                    <ul id="progressbar-2" class="d-flex justify-content-between mx-0 mt-0 mb-5 px-0 pt-0 pb-2">
                                        <li class="step0 @if($order->status=='created' || $order->status=='processing' || $order->status=='in-route' || $order->status=='delivered') active @else text-muted @endif text-center" id="step1"></li>
                                        <li class="step1 @if($order->status=='processing' || $order->status=='in-route' || $order->status=='delivered') active @else text-muted  @endif  text-center" id="step2"></li>
                                        <li class="step2 @if( $order->status=='in-route' || $order->status=='delivered') active @else text-muted  @endif  text-center" id="step3"></li>
                                        <li class="step3 @if( $order->status=='delivered') active  @else text-muted  @endif  " id="step4"></li>
                                    </ul>

                                    <div class="d-flex justify-content-between">
                                        <div class="d-lg-flex align-items-center">
                                            <i class="fal fa-clipboard-list fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                            <div>
                                                <p class="fw-bold mb-1">Order Placed</p>

                                                <p class="fw-bold mb-0">@if($order->status=='created' || $order->status=='processing' || $order->status=='in-route' || $order->status=='delivered')   <i class="fal fa-check fa-2x"></i>  @endif </p>
                                            </div>
                                        </div>
                                        <div class="d-lg-flex align-items-center">
                                            <i class="fal fa-box-open fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                            <div>
                                                <p class="fw-bold mb-1">Order Processing </p>
                                                <p class="fw-bold mb-0">@if($order->status=='processing' || $order->status=='in-route' || $order->status=='delivered')   <i class="fal fa-check fa-2x"></i>  @endif </p>

                                            </div>
                                        </div>
                                        <div class="d-lg-flex align-items-center">
                                            <i class="fal fa-shipping-fast fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                            <div>
                                                <p class="fw-bold mb-1">Order On The Way</p>
                                                <p class="fw-bold mb-0">@if( $order->status=='in-route' || $order->status=='delivered')   <i class="fal fa-check fa-2x"></i>  @endif </p>

                                            </div>
                                        </div>
                                        <div class="d-lg-flex align-items-center">
                                            <i class="fal fa-home fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                            <div>
                                                <p class="fw-bold mb-1">Order Delivered</p>
                                                <p class="fw-bold mb-0">@if( $order->status=='delivered')   <i class="fal fa-check fa-2x"></i>  @endif </p>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

    @endforeach
    </div>
</div>
