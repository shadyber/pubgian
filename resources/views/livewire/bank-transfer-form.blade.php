<div>
    @if(!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif


    <form wire:submit="savePayment">

        <div class="form-group">

            <div>
                @error('name') <span class="error red-color">{{ $message }}</span> @enderror
                <x-label for="name" value="{{ __('Payer Name') }}" />
                <input id="name" class="block mt-1 w-full" type="text" name="payer_name" wire:model="payer_name" :value="old('payer_name')" required autofocus autocomplete="payer_name" />
            </div>


            <div>
                @error('email') <span class="error red-color">{{ $message }}</span> @enderror
                <x-label for="name" value="{{ __('Payer Email') }}" />
                <input id="email" class="block mt-1 w-full" type="email" name="payer_email" wire:model="payer_email" :value="old('payer_email')" autofocus autocomplete="payer_email" />
            </div>

            <div>
                @error('bank_name') <span class="error red-color">{{ $message }}</span> @enderror
                <x-label for="bank_name" value="{{ __('Bank Name') }}" />
                <select id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" wire:model="bank_name" :value="old('bank_name')" required autofocus autocomplete="bank_name" >
                    <option value="cbe"> Commercial Bank Of Ethiopia : 1000218140428 [Mintesinot Nigusie]</option>
                    <option value="cbe">Telebirr: 0912852989  [Birhane Dangew]</option>
                    <option value="cbe"> Awash Bank: 01320450790000 [Mintesinot Nigusie]</option>

                </select>
            </div>

            <div>
                @error('payment_reference') <span class="error red-color">{{ $message }}</span> @enderror
                <x-label for="payment_reference" value="{{ __('Payment Reference Number') }}" />
                <input id="payment_reference" class="block mt-1 w-full" type="text" name="payment_reference" wire:model="payment_reference" :value="old('payment_reference')" required autofocus autocomplete="payment_reference" />
            </div>

            <div>
                @error('amount') <span class="error red-color">{{ $message }}</span> @enderror
                <x-label for="amount" value="{{ __('Amount' ) }}" />
                <p class="text-xs color-purple">Please Deposit Amount value from Cart Total ; if you send money that is not listed to our cart and order system we might not confirm or find your payment  </p>
                <input type="number" name="amount" id="amount" class="form-control" value="{{$amount}}" required readonly wire:model="amount" />
            </div>


            <div>
                @error('note') <span class="error red-color">{{ $message }}</span> @enderror
                <x-label for="payment_reference" value="{{ __('Send Us a Note') }}" />
                <p class="text-xs"> Note: if you are purchasing Digitall Assets such as 'Pubg Us' you must Put Your Game Profile ID  here </p>
                <input id="note" class="block mt-1 w-full" type="text" name="note" wire:model="note" :value="old('note')"  autofocus autocomplete="note" />
            </div>

            <div>

                @if ($payment_proof)

                    <div class="card col-md-2">

                        <img src="{{ $payment_proof->temporaryUrl() }}" width="100px" height="100px">
                    </div>

                @endif

                <x-label for="name" value="{{ __('Payment Proof Screenshot or Recipt') }}" />
                <input id="payment_proof" class="block mt-1 w-full" type="file" name="payment_proof"
                       accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                       wire:model="payment_proof" :value="old('payment_proof')" required autofocus autocomplete="payment_proof" />
            </div>
            <button class="focus:outline-none focus:ring-2 dark:bg-gray-800 dark:text-white focus:ring-gray-500 focus:ring-offset-2 mt-8 text-base
            font-medium focus:ring-2 focus:ring-ocus:ring-gray-800 leading-4 hover:bg-black py-4 w-full md:w-4/12 lg:w-full text-white bg-gray-800">
                Confirm Payment and Place Order
            </button>

            @if(!empty($successMessage))
                <div class="alert alert-success">
                    {{ $successMessage }}
                </div>
            @endif

        </div>
    </form>
</div>
