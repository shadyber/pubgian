<div>
    <form wire:submit="savePayment">

        <div class="form-group">

            <div>
                <x-label for="name" value="{{ __('Payer Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="payer_name" wire:model="payer_name" :value="old('payer_name')" required autofocus autocomplete="payer_name" />
            </div>


            <div>
                <x-label for="name" value="{{ __('Payer Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="payer_email" wire:model="payer_email" :value="old('payer_email')" autofocus autocomplete="payer_email" />
            </div>

            <div>
                <x-label for="name" value="{{ __('Bank Name') }}" />
                <select id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" wire:model="bank_name" :value="old('bank_name')" required autofocus autocomplete="bank_name" >
                    <option value="cbe"> Commercial Bank Of Ethiopia : 1000218140428</option>
                    <option value="cbe">Telebirr: 0912852989</option>
                    <option value="cbe"> Awash Bank: 1000218140428</option>
                    <option value="cbe"> Bank Of Abysiniya: 1000218140428</option>
                    <option value="cbe">Dashn Bank: 1000218140428</option>
                </select>
            </div>

            <div>
                <x-label for="name" value="{{ __('Payment Reference Number') }}" />
                <x-input id="payment_reference" class="block mt-1 w-full" type="text" name="payment_reference" wire:model="payment_reference" :value="old('payment_reference')" required autofocus autocomplete="payment_reference" />
            </div>

            <div>
                <x-label for="name" value="{{ __('Amount') }}" />
                <x-input id="amount" class="block mt-1 w-full" type="text" name="amount" wire:model="amount" :value="old('amount')" required readonly />
            </div>



            <div>

                @if ($payment_proof)

                        <div class="card col-md-2">

                            <img src="{{ $payment_proof->temporaryUrl() }}" width="100px" height="100px">
                        </div>

                @endif

                <x-label for="name" value="{{ __('Payment Proof Screenshot or Recipt') }}" />
                <x-input id="payment_proof" class="block mt-1 w-full" type="file" name="payment_proof"
                         accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                         wire:model="payment_proof" :value="old('payment_proof')" required autofocus autocomplete="payment_proof" />
            </div>
            <button class="focus:outline-none focus:ring-2 dark:bg-gray-800 dark:text-white focus:ring-gray-500 focus:ring-offset-2 mt-8 text-base
            font-medium focus:ring-2 focus:ring-ocus:ring-gray-800 leading-4 hover:bg-black py-4 w-full md:w-4/12 lg:w-full text-white bg-gray-800">
               Confirm Payment and Place Order
            </button>



        </div>
    </form>
</div>
