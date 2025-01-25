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

            $table->string('merchant_id');
            $table->string('order_id');
            $table->string('merchant_reference_id');
            $table->integer('amount');
            $table->string('time_to_live_in_seconds');
            $table->string('payment_description');
            $table->string('merchant_name');
            $table->string('items');

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
