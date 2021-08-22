<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminexes', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Exhibition_Name');
            $table->String('Full_Name');
            $table->String('Mobile_Number');
            $table->String('Email');
            $table->String('Password');
            $table->enum('Type_of_Exhibition', ['Sٍٍpecific', 'inclusive'])->nullable();
            $table->enum('Number_of_Attendees', ['Less than 1K', '1 K - 10 K','10 K +'])->nullable();
            $table->enum('Number_of_Exhibiting_Companies', ['None', 'Less than 50', '50+'])->nullable();
            $table->enum('Event_Budget', ['Less Than 10 M', '10 M - 100 M','100 M - 1 B'])->nullable();
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
        Schema::dropIfExists('adminexes');
    }
}
