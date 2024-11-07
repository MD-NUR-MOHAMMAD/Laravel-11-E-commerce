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
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('status', ['processing', 'shipping', 'delivered', 'cancelled'])->default('processing');
            $table->string('transaction_id')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->string('zipcode')->nullable();
            $table->enum('status', ['paid', 'unpaid'])->default('unpaid');
            $table->string('payment_type');
            $table->set('status', ['processing', 'delivered', 'returned'])->default('processing');
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
