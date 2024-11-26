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
            // $table->bigInteger('category_id')->unsigned()->nullable();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->bigInteger('subcategory_id')->unsigned()->nullable();
            // $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            //vendor id
            // $table->bigInteger('vendor_id')->unsigned()->nullable();
            // $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('brand_id')->nullable();
            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->string('sku');
            $table->set('status', ['active', 'inactive'])->default('active');
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
