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

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('set null');

            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('status');
            $table->string('postalcode');
            $table->string('phone');
            $table->string('name_on_card');
            $table->string('discount')->default(0);
            $table->string('discount_code')->nullable();
            $table->string('subtotal');
            $table->string('tax');
            $table->string('total');
            $table->string('payment_geteway')->default('stripe');
            $table->string('error')->nullable();

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
