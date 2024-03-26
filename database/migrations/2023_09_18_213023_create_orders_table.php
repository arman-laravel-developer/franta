<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contest_id')->nullable();
            $table->foreignId('userAuth_id')->nullable();
            $table->foreignId('cart_id')->nullable();
            $table->string('total_price')->nullable();
            $table->integer('qty')->nullable();
            $table->string('order_code')->nullable();
            $table->tinyInteger('payment_method')->nullable();
            $table->string('payment_amount')->nullable();
            $table->string('payment_number')->nullable();
            $table->date('order_date')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_screenShort')->nullable();
            $table->tinyInteger('payment_status')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
