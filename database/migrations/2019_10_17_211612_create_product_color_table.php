<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductColorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_color', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('color_id');

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('color_id')->references('id')->on('colors');

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
        Schema::dropIfExists('product_color');
    }
}
