<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->binary('image');
            $table->string('title');
            $table->string('author');
            $table->string('nhaXB');
            $table->double('old_price');
            $table->double('price');
            $table->integer('quantity');
            $table->double('total_price');
            $table->dateTime('order_date');
            $table->string('payment_status');
            $table->string('payment_methods');
            $table->string('note');
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
