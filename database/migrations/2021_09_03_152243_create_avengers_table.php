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

            $table->string('name')->nullable();
            $table->string('bioma')->nullable();
            $table->string('region')->nullable();
            $table->string('conservation')->nullable();
            $table->string('scientific')->nullable();
            $table->string('family')->nullable();
            $table->string('orden')->nullable();
            $table->string('photograph')->nullable();

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
