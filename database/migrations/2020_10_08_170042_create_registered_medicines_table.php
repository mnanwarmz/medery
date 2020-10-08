<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_medicines', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('registered_number');
            $table->string('product_name');
            $table->string('status');
            $table->string('holder_name');
            $table->string('ref_number');
            $table->string('manufacturer_name');
            $table->string('description');
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
        Schema::dropIfExists('registered_medicines');
    }
}
