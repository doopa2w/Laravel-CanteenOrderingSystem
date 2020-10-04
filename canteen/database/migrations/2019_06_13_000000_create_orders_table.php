<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->references('id')->on('customers');
            $table->bigInteger('food_id')->references('id')->on('foods');
            $table->bigInteger('manager_id')->references('id')->on('managers');
            $table->double('billing_total');
            $table->string('status')->default('preparing'); //preparing, ready, collected, cancelled
            $table->string('payment_gateway')->default('cash'); //Not implemented yet
            $table->boolean('paid')->default(false);
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
}
