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
        Schema::create('makeorders', function (Blueprint $table) {
            $table->id();
            $table->string('uname');
            $table->string('add');
            $table->string('otitle');
            $table->integer('price');
            $table->integer('ototal');
            $table->integer('totalprice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makeorders');
    }
};
