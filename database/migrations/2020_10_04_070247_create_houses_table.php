<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('house_id')->unique();
            $table->text('address');
            $table->string('card_id');
            $table->foreign('card_id')
                ->references('card_id')->on('users');
            $table->string('type');
            $table->integer('age');
            $table->integer('size');
            $table->boolean('carpark');
            $table->integer('rent');
            $table->integer('review');
            $table->text('notes');
            $table->string('employee_id');
            $table->foreign('employee_id')
                ->references('card_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}