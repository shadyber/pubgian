<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable=[
        'cart', 'user_id', 'bank_name' , 'payer_name' , 'payer_tel', 'payer_email', 'shippingInfo', 'payment_reference' , 'payment_proof' , 'amount' , 'note'
    ];
    public static function paymentsByDate($start , $end){
        return Payment::where('created_at','>=',$start)
            ->where('created_at','<=',$end)
            ->get();
    }

    public static function paymentsAmountByDate($start , $end){
        $payments= Payment::where('created_at','>=',$start)
            ->where('created_at','<=',$end)
            ->get();

        $totalpayment=0;
        foreach ($payments as $payment){
            $totalpayment+=$payment->amount;
        }
        return $totalpayment;
    }


    public function order(){
        return $this->belongsTo(Order::class);
    }
}
