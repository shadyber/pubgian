<x-app-layout>
    <x-slot name="header">

            {{ __('Checkout') }}

    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



                <div class="flex justify-center align-items-start 2xl:container 2xl:mx-auto lg:py-16 md:py-12 py-9 px-4 md:px-6 lg:px-20 xl:px-44">
                    <div class="flex w-full sm:w-9/12 lg:w-full flex-col lg:flex-row justify-center items-center lg:space-x-10 2xl:space-x-36 space-y-12 lg:space-y-0">


                    <div class="flex flex-col justify-start  items-start bg-gray-50 dark:bg-gray-800 w-full p-6 md:p-14 mr-3">
                            <div>
                                <h1 class="text-2xl  dark:text-white font-semibold leading-6 text-gray-800">Order Summary</h1>
                            </div>
                            <div class="flex mt-7 flex-col items-end w-full space-y-6">
                                <div class="flex justify-between w-full items-center">
                                    <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Total items</p>
                                    <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">{{count(\App\Models\Cart::myCart())}}</p>

                                </div>
                                @foreach(\App\Models\Cart::myCart() as $cart)
                                    <p><small> {{$cart['name']}}   x {{$cart['quantity']}}  (ETB {{$cart['price'] * $cart['quantity']}})</small> <br></p>
                                @endforeach
                                <div class="flex justify-between w-full items-center">
                                    <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Total Charges</p>
                                    <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">$ETB {{\App\Models\Cart::totalCart()}}</p>
                                </div>
                                <div class="flex justify-between w-full items-center">
                                    <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Shipping charges</p>
                                    <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">$ETB 0</p>
                                </div>
                                <div class="flex justify-between w-full items-center">
                                    <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Sub total</p>
                                    <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">$ETB  {{\App\Models\Cart::totalCart()}}</p>
                                </div>
                            </div>
                            <div class="flex justify-between w-full items-center mt-32">
                                <p class="text-xl dark:text-white font-semibold leading-4 text-gray-800">Estimated Total</p>
                                <p class="text-lg dark:text-white font-semibold leading-4 text-gray-800">$ETB {{\App\Models\Cart::totalCart()}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full flex-col justify-start items-start ml-3">



                            <div class="mt-12">
                                <p class="text-xl font-semibold dark:text-white leading-5 text-gray-800">Shipping Details</p>



                            </div>


                            <div class="mt-8 flex flex-col justify-start items-start w-full space-y-8">
                                <form action="/saveshipinginfo" method="post">

                                    @csrf


                                    @error('first_name') <span class="error">{{ $message }}</span> @enderror

                                    <input class="px-2 focus:outline-none dark:bg-transparent
                                    dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2
                                    focus:ring-gray-500 border-b border-gray-200 leading-4
                                    text-base placeholder-gray-600 py-4 w-full" type="text"
                                           placeholder="First Name"  type="text" name="first_name"
                                           value="{{$shippinginfo ? $shippinginfo->first_name : ''}}"/>


                                    @error('last_name') <span class="error">{{ $message }}</span> @enderror

                                    <input class="px-2 focus:outline-none  dark:bg-transparent dark:text-gray-400
                                    dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500 border-b border-gray-200
                                    leading-4 text-base placeholder-gray-600 py-4 w-full" type="text" placeholder="Last Name"
                                          name="last_name"  value="{{$shippinginfo ? $shippinginfo->last_name : ''}}" />





                                    @error('email') <span class="error">{{ $message }}</span> @enderror

                                    <input class="px-2 focus:outline-none  dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2
                                    focus:ring-gray-500 border-b border-gray-200 leading-4 text-base placeholder-gray-600 py-4 w-full"
                                           type="email" placeholder="Email"  name="email"  value="{{$shippinginfo ? $shippinginfo->email : ''}}" />




                                    @error('street_address') <span class="error">{{ $message }}</span> @enderror

                                    <input class="px-2 focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400
                                    focus:ring-2 focus:ring-gray-500 border-b border-gray-200 leading-4 text-base placeholder-gray-600 py-4 w-full"
                                           type="text" placeholder="Street Address" name="street_address"
                                           value="{{$shippinginfo ? $shippinginfo->street_address : ''}}" />



                                    @error('appartment_number') <span class="error">{{ $message }}</span> @enderror

                                    <input class="px-2 focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400
                                    focus:ring-2 focus:ring-gray-500 border-b border-gray-200 leading-4 text-base placeholder-gray-600 py-4 w-full"
                                           type="text" placeholder="Address (line 02) or Apt # "
                                           name="appartment_number"  value="{{$shippinginfo ? $shippinginfo->appartment_number : ''}}" />




                                    @error('country_code') <span class="error">{{ $message }}</span> @enderror

                                <select class="px-2 focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400
                                 focus:ring-2 focus:ring-gray-500 border-b border-gray-200 leading-4 text-base placeholder-gray-600 py-4 w-full"
                                        name="country_code"  value="{{$shippinginfo ? $shippinginfo->country_code : ''}}">
                                    <option value="">Select Country</option>
                                    <option value="Eth">Ethiopia</option>
                                </select>


                                    @error('city') <span class="error">{{ $message }}</span> @enderror

                                <select class="px-2 focus:outline-none
                                dark:bg-transparent dark:text-gray-400
                                dark:placeholder-gray-400 focus:ring-2
                                focus:ring-gray-500 border-b border-gray-200
                                 leading-4 text-base placeholder-gray-600 py-4 w-full"
                                        name="city"  value="{{$shippinginfo ? $shippinginfo->city : ''}}">

                                    <option value="">Select City</option>
                                    <option value="Addis Ababa">Addis Ababa</option>
                                    <option value="semera">Semera </option>
                                    <option value="Jigjiga">Jigjiga</option>
                                    <option value="Mekele">Mekele</option>
                                    <option value="Hawassa">Hawassa</option>
                                    <option value="Bahirdar">Bahir Dar</option>
                                </select>


                                    @error('phone') <span class="error">{{ $message }}</span> @enderror

                                <input class="focus:outline-none dark:text-gray-400 dark:bg-transparent
                                 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500 px-2 border-b
                                  border-gray-200 leading-4 text-base placeholder-gray-600 py-4 w-full"
                                      placeholder="Phone Number" type="tel" name="phone"  value="{{$shippinginfo ? $shippinginfo->phone : ''}}" />


                                <button class="focus:outline-none focus:ring-2 dark:bg-gray-800 dark:text-white
                                 focus:ring-gray-500 focus:ring-offset-2 mt-8 text-base font-medium focus:ring-2
                                 focus:ring-ocus:ring-gray-800 leading-4 hover:bg-black py-4 w-full md:w-4/12 lg:w-full
                                 text-white bg-gray-800">Proceed to payment</button>


                        </form>

                    </div>


                            <div class="mt-4 flex justify-start items-center w-full">
                                <a href="/mycart" class="btn tox-button--icon-and-text text-base leading-4 dark:text-gray-400 hover:underline focus:outline-none focus:text-gray-500 hover:text-gray-800 text-gray-600"> << Back to my Cart</a>
                            </div>
                        </div>
                </div>

        </div>
    </div>
</x-app-layout>
