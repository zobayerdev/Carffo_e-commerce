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
        Schema::table('carts',function (Blueprint $table){
            $table->string('order_no')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('status')->nullable();
            $table->string('payment')->nullable();
            $table->string('delivery_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
