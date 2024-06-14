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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->json('cart');
            $table->bigInteger('shipping_address_id');
            $table->bigInteger('payments_id')->unsigned();
            $table->foreign('payments_id')->references('id')->on('payments')->onDelete('cascade');

            $table->string('status')->default('created');
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
        Schema::dropIfExists('orders');
    }
};
