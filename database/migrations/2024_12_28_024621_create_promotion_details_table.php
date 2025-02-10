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
        Schema::create('promotion_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->index(["product_id"], 'fk_product_promotion1_idx');
            $table->foreign('product_id', 'fk_product_promotion1_idx')
                ->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('promotion_id');
            $table->index(["promotion_id"], 'fk_promotion_product1_idx');
            $table->foreign('promotion_id', 'fk_promotion_product1_idx')
                ->references('id')->on('promotions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_details');
    }
};
