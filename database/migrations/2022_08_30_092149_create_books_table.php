<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book_name');
            $table->string('image');
            $table->string('author');
            $table->string('publisher_name')->references('publisher_name')->on('publishers')->onDelete('cascade');
            $table->string('publish_year');
            $table->string('category_name')->references('category_name')->on('categories')->onDelete('cascade');
            $table->integer('quantity');
            $table->double('old_price');
            $table->double('price');
            $table->string('status');
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
        Schema::dropIfExists('books');
    }
};
