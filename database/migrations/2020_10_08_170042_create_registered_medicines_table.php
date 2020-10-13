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
            $table->string('registered_number')->nullable();
            $table->string('product_name')->nullable();
            $table->string('status')->nullable();
            $table->string('holder_name')->nullable();
            $table->string('ref_number')->nullable();
            $table->string('manufacturer_name')->nullable();
            $table->string('description')->nullable();
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
