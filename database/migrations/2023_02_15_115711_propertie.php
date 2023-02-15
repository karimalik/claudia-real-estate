<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('beds')->nullable();
            $table->string('baths')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('area')->nullable();
            $table->string('number_pieces')->nullable();
            $table->string('years')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('images')->nullable();
            $table->string('basement')->nullable();
            $table->string('garage')->nullable();
            $table->string('foundation')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
