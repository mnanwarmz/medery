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
            $table->string('register_number')->nullable();
            $table->string('product_name')->nullable();
            $table->string('description')->nullable();
            $table->time('register_date')->nullable();
            $table->time('end_register_date')->nullable();
            $table->time('cancel_date')->nullable();
            $table->string('holder_name')->nullable();
            $table->string('manufacturer_name')->nullable();
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
