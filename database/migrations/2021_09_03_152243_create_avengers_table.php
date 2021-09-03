<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avengers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('bioma');
            $table->string('region');
            $table->string('conservation');
            $table->string('scientific');
            $table->string('family');
            $table->string('orden');
            $table->string('photograph');

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
        Schema::dropIfExists('avengers');
    }
}
