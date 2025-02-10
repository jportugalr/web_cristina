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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();

            $table->string('name');            
            $table->string('description, 255')->nullable();            
            $table->decimal('price', 19, 4)->nullable();
            $table->decimal('discounted_price', 19, 4);
            $table->tinyInteger('status');

            $table->unsignedBigInteger('catalog_id');
            $table->index(["catalog_id"], 'fk_promotions_catalog1_idx');
            $table->foreign('catalog_id', 'fk_promotions_catalog1_idx')
                ->references('id')->on('catalogs')
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
        Schema::dropIfExists('promotions');
    }
};
