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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longText('detail');
            $table->string('photo')->default('/img/placeholder.png');
            $table->string('thumb')->default('/img/placeholder.png');
            $table->string('color')->nullable();
            $table->string('video_url')->nullable();
            $table->double('price');

            $table->string('weight')->default('0');
            $table->unsignedBigInteger('item_category_id');
            $table->foreign('item_category_id')->references('id')->on('item_categories');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('init_qnt')->default(1);
            $table->string('status')->default('available');
            $table->string('item_condition')->default('new');
            $table->string('badge')->nullable()->default('NEW');
            $table->string('tags')->nullable();
            $table->integer('visit')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
