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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('code')->nullable();
            $table->text('detail')->nullable();
            $table->string('description');
            $table->decimal('price', 19, 4)->nullable();
            $table->tinyInteger('status');
            $table->string('slug')->unique();

            $table->unsignedBigInteger('category_id');
            $table->index(["category_id"], 'fk_products_categories1_idx');
            $table->foreign('category_id', 'fk_products_categories1_idx')
                ->references('id')->on('categories')
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
        Schema::dropIfExists('products');
    }
};
