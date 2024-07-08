<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->json('cart');
            $table->string('payer_email')->nullable();
            $table->string('payer_name')->nullable();
            $table->string('payer_tel')->nullable();
            $table->string('note')->nullable();
            $table->float('amount', 10, 2);
            $table->string('currency')->default('usd');
            $table->string('payment_status')->default('created');
            $table->string('bank_name')->nullable();
            $table->string('payment_reference');
            $table->string('payment_proof');
            $table->bigInteger('user_id')->unsigned();
            //FOREIGN KEY CONSTRAINTS
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
