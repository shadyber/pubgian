<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\Payment;
use App\Notifications\NewOrderNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use function Pest\Expectations\json;
use function Pest\Subscribers\notify;

class BankTransferForm extends Component
{
    use WithFileUploads;
    public $user_id, $cart , $shippinginfo , $payer_name, $payer_email, $amount , $payment_reference,  $payment_proof, $bank_name;

    public $successMessage = '';


    public function savePayment(){

        $validatedData = $this->validate([
            'cart' => 'required',
            'bank_name' => 'required',
            'amount' => 'required',
            'payment_proof' => 'required',
            'payment_reference' =>'required'
        ]);

        $this->cart=json_encode(\App\Models\Cart::myCart());
        $img= $this->payment_proof->storePublicly( 'images', 'public');

      $payment= Payment::create([
            'cart'=>$this->cart,
            'user_id'=>Auth::user()->getAuthIdentifier(),

            'payer_name'=>$this->payer_name,

            'payer_email'=>$this->payer_email,
            'amount'=>$this->amount,
            'bank_name'=>$this->bank_name,
            'payment_reference'=>$this->payment_reference,
            'payment_proof'=>env('APP_URL').'/'.$img,
        ]);
       $cart_json=json_encode(\App\Models\Cart::myCart());
       $order= Order::create([
            'cart'=>$cart_json,
            'user_id' =>\auth()->user()->getAuthIdentifier(),
            'shipping_address_id'=>Auth::user()->shippinginfo->id,
            'payments_id'=>$payment->id

        ]);
      //  Auth::user()->notify(new NewOrderNotification($order));
        Session()->remove('cart');
        $this->successMessage="Payment Confirmation Saved ! We Will Respond ASAP.";

}

    public function mount(){

        $this->user=Auth::user();

        $this->cart=json_encode(\App\Models\Cart::myCart());

        $this->shippinginfo=$this->user->shippinginfo;
        $this->payer_name=$this->user->name;
        $this->payer_email=$this->user->email;
        $this->payment_reference='';
        $this->bank_name='';
        $this->amount=\App\Models\Cart::totalCart();


    }
    public function render()
    {
        return view('livewire.bank-transfer-form');
    }
}
