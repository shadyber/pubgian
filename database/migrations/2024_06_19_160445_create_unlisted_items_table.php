
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
        Schema::create('unlisted_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price_range');
            $table->string('images');
            $table->string('video_url');
            $table->string('shop_url');
            $table->bigInteger('item_category_id')->unsigned();
            $table->string('order_urgency');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unlisted_items');
    }
};
