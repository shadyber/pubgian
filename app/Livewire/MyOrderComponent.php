<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyOrderComponent extends Component
{
    public  $user;
    public $orders;
    public $successMessage;


 public function updateStatus($formdata){
Order::find($formdata['order_id'])->update([
        'status'=>$formdata['status'],

]);

 $this->successMessage="Order Status Updated";

 }


    public function mount(){
        $this->user=Auth::user();
        if($this->user->id!=1) {
            $this->orders = $this->user->orders;
        }
        else{
            $this->orders= Order::where('status','!=', 'delivered')->get();
        }

    }

    public function render()
    {
        return view('livewire.my-order-component');
    }
}
