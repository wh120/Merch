<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merches', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Full_Name');
            $table->String('Company_Name');
            $table->String('Email');
            $table->String('Password');
            $table->String('Type_of_goods');
            $table->enum('Space_Required', ['4 x 4', '10 x 10', '50 x 50'])->nullable();
            $table->String('id_Exhibtion')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('merches');
    }
}
