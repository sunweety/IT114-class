<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('contract_id')->unique();
            $table->integer('house_id');
            $table->foreign('house_id')
                ->references('house_id')->on('houses');
            
            $table->string('landlord_id');
            $table->foreign('landlord_id')
                ->references('card_id')->on('users');
            $table->string('tenant_id');
            $table->foreign('tenant_id')
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
        Schema::dropIfExists('records');
    }
}
