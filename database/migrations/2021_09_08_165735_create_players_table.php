<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->string('cellphone')->unique();
            $table->string('city')->nullable();
            $table->string('profession')->nullable();
            $table->string('university')->nullable();
            $table->string('team')->nullable();
            $table->string('position')->nullable();
            $table->string('alias')->nullable();
            $table->date('inscription')->nullable();
            $table->boolean('status')->default(false);

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
        Schema::dropIfExists('players');
    }
}
