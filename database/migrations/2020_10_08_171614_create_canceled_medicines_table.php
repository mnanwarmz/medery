<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanceledMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canceled_medicines', function (Blueprint $table) {
            $table->id();
            $table->string('register_number');
            $table->string('product_name');
            $table->string('description');
            $table->date('register_date');
            $table->date('end_register_date');
            $table->date('cancel_date');
            $table->string('holder_name');
            $table->string('manufacturer_name');
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
        Schema::dropIfExists('canceled_medicines');
    }
}
