<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Brand');
            $table->String('Model');
            $table->String('Price');
            $table->String('Warranty');
            $table->String('Description');
            $table->String('id_categorie');
            $table->String('id_Exhibtion');
            $table->unsignedInteger('merch_id');
            $table->foreign('merch_id')
                ->references('id')->on('merches')
                ->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
