<x-app-layout>
    <x-slot name="header">

        {{ __('Finish Payment') }}

    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center align-items-start 2xl:container 2xl:mx-auto lg:py-16 md:py-12 py-9 px-4 md:px-6 lg:px-20 xl:px-44">
                <div class="flex w-full sm:w-9/12 lg:w-full flex-col lg:flex-row justify-center items-center lg:space-x-10 2xl:space-x-36
                     space-y-12 lg:space-y-0">


                    <div class="flex flex-col justify-start  items-start bg-gray-50 dark:bg-gray-800 w-full p-6 md:p-14 mr-3">
                        <div>
                            @if(!$user_id==\Illuminate\Support\Facades\Auth::user()->id)
                                <h3>Are You Sure , You Order This Cart ? </h3>
                            @endif
                            <h1 class="text-2xl  dark:text-white font-semibold leading-6 text-gray-800">Order Summary</h1>

                        </div>

                        <div class="flex mt-7 flex-col items-end w-full space-y-6">
                            <div class="flex justify-between w-full items-center">
                                <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Total items</p>
                                <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600"> {{$order->item_count}} </p>

                            </div>
                            @foreach($carts as $cart)
                                <p><small> {{$cart->name}}   x {{$cart->quantity}}  (ETB {{$cart->price * $cart->quantity}})</small> <br></p>
                            @endforeach
                            <div class="flex justify-between w-full items-center">
                                <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Total Charges</p>
                                <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">$ETB {{$order->payment_expected}}</p>
                            </div>
                            <div class="flex justify-between w-full items-center">
                                <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Shipping charges</p>
                                <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">$ETB 0</p>
                            </div>

                        </div>
                        <div class="flex justify-between w-full items-center mt-32">
                            <p class="text-xl dark:text-white font-semibold leading-4 text-gray-800">Estimated Total</p>
                            <p class="text-lg dark:text-white font-semibold leading-4 text-gray-800">$ETB {{$order->payment_expected}}</p>
                        </div>


                        <hr>
                        <div class="flex mt-4 flex-col items-end w-full space-y-6 card-body" > <h1> ship to ..</h1></div>
                        <div class="card bg-[#FF2D20]/10">
                            <input type="radio" checked>
                            <p> {{$shippinginfo->country_code}}:  {{$shippinginfo->city}}</p>
                            <p>{{$shippinginfo->street_address}} : {{$shippinginfo->apartment_number}}</p>


                        </div>
                    </div>
                </div>
                <div class="flex w-full flex-col justify-start items-start ml-3">



                    <div class="mt-12">
                        <p class="text-xl font-semibold dark:text-white leading-5 text-gray-800">Payment Options</p>

                    </div>
                    <div class="mt-8 flex flex-col justify-start items-start w-full space-y-8">


                        <div class="flex w-full flex-col gap-4 text-slate-700 dark:text-slate-300">
                            <div x-data="{ isExpanded: true }" class="divide-y divide-slate-300 overflow-hidden rounded-xl border border-slate-300 bg-slate-100/40 dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800/50">
                                <button id="controlsAccordionItemOne" type="button" class="flex w-full items-center justify-between gap-2 bg-slate-100 p-4 text-left underline-offset-2 hover:bg-slate-100/75 focus-visible:bg-slate-100/75 focus-visible:underline focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-800/75 dark:focus-visible:bg-slate-800/75" aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold'  : 'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                                    <b>  Bank Transfer</b>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                                <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne"  x-collapse>
                                    <div class="p-4 text-sm sm:text-base text-pretty">
                                        <p>Deposit ETB : {{$order->payment_expected}} to one of the following account and fill the form below to confirm the payment.</p>
                                        <option value="cbe"> Commercial Bank Of Ethiopia : 1000218140428</option>
                                        <option value="cbe">Telebirr: 0912852989</option>
                                        <option value="cbe"> Awash Bank: 1000218140428</option>
                                        <option value="cbe"> Bank Of Abysiniya: 1000218140428</option>
                                        <option value="cbe">Dashn Bank: 1000218140428</option>


                                        @livewire('bank-transfer-form')
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ isExpanded: false }" class="divide-y divide-slate-300 overflow-hidden rounded-xl border border-slate-300 bg-slate-100/40 dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800/50">
                                <button id="controlsAccordionItemTwo" type="button" class="flex w-full items-center justify-between gap-2 bg-slate-100 p-4 text-left underline-offset-2 hover:bg-slate-100/75 focus-visible:bg-slate-100/75 focus-visible:underline focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-800/75 dark:focus-visible:bg-slate-800/75" aria-controls="accordionItemTwo" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold'  : 'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                                    Crypto Payment
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                                <div x-cloak x-show="isExpanded" id="accordionItemTwo" role="region" aria-labelledby="controlsAccordionItemTwo"  x-collapse>
                                    <div class="p-4 text-sm sm:text-base text-pretty">
                                        wallet crypto transfer
                                    </div>
                                </div>
                            </div>

                            <div x-data="{ isExpanded: false }" class="divide-y divide-slate-300 overflow-hidden rounded-xl border border-slate-300 bg-slate-100/40 dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800/50">
                                <button id="controlsAccordionItemTwo" type="button" class="flex w-full items-center justify-between gap-2 bg-slate-100 p-4 text-left underline-offset-2 hover:bg-slate-100/75 focus-visible:bg-slate-100/75 focus-visible:underline focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-800/75 dark:focus-visible:bg-slate-800/75" aria-controls="accordionItemTwo" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold'  : 'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                                    Credit / Debit Card Payment
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                                <div x-cloak x-show="isExpanded" id="accordionItemFour" role="region" aria-labelledby="controlsAccordionItemFour"  x-collapse>
                                    <div class="p-4 text-sm sm:text-base text-pretty">
                                        Card payment form here
                                    </div>
                                </div>
                            </div>


                            <div x-data="{ isExpanded: false }" class="divide-y divide-slate-300 overflow-hidden rounded-xl border border-slate-300 bg-slate-100/40 dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800/50">
                                <button id="controlsAccordionItemThree" type="button" class="flex w-full items-center justify-between gap-2 bg-slate-100 p-4 text-left underline-offset-2 hover:bg-slate-100/75 focus-visible:bg-slate-100/75 focus-visible:underline focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-800/75 dark:focus-visible:bg-slate-800/75" aria-controls="accordionItemThree" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold'  : 'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                                    PayPal
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                                <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region" aria-labelledby="controlsAccordionItemThree"  x-collapse>
                                    <div class="p-4 text-sm sm:text-base text-pretty">



                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

                                            <!-- Saved buttons use the "secure click" command -->
                                            <input type="hidden" name="cmd" value="_s-xclick">

                                            <!-- Saved buttons are identified by their button IDs -->
                                            <input type="hidden" name="hosted_button_id" value="221">

                                            <!-- Saved buttons display an appropriate button image. -->
                                            <input type="image" name="submit"
                                                   src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                                                   alt="PayPal - The safer, easier way to pay online">
                                            <img alt="" width="1" height="1"
                                                 src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <button class="focus:outline-none focus:ring-2 dark:bg-gray-800 dark:text-white focus:ring-gray-500
                            focus:ring-offset-2 mt-8 text-base font-medium focus:ring-2 focus:ring-ocus:ring-gray-800 leading-4
                            hover:bg-black py-4 w-full md:w-4/12 lg:w-full text-white bg-gray-800">Confirm Payment and Place Order</button>


                    <div class="mt-4 flex justify-start items-center w-full">
                        <a href="/mycart" class="text-base leading-4 dark:text-gray-400 hover:underline focus:outline-none focus:text-gray-500 hover:text-gray-800 text-gray-600"> << Back to my Cart</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
