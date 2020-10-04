<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('manager_id')->references('id')->on('manager');
            $table->bigInteger('category_id')->references('id')->on('categories');
            $table->string('name')->unique()->nullable();
            $table->double('price');
            $table->string('title');
            $table->string('cover_image')->nullable();
            $table->text('desc');
            $table->boolean('featured')->default(false);
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
        Schema::dropIfExists('foods');
    }
}
