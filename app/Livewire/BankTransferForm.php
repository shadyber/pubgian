<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use function Pest\Expectations\json;

class BankTransferForm extends Component
{
    use WithFileUploads;
    public $user, $cart , $shippinginfo , $payer_name, $payer_email, $amount , $payment_reference,  $payment_proof, $bank_name;


public function savePayment(){
    //
    dd('done');
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
