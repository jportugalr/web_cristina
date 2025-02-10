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
        Schema::create('tag_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tag_id');
            $table->index(["tag_id"], 'fk_tag_product1_idx');
            $table->foreign('tag_id', 'fk_tag_product1_idx')
                ->references('id')->on('tags')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('product_id');
            $table->index(["product_id"], 'fk_product_tag1_idx');
            $table->foreign('product_id', 'fk_product_tag1_idx')
                ->references('id')->on('products')
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
        Schema::dropIfExists('tag_products');
    }
};
