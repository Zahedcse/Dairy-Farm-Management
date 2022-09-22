<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cow_id');
            $table->date('date_recorded');
            $table->double('litre_collected');
            $table->double('price_per_litre');
            $table->timestamps();
            $table->foreign('cow_id')->references('id')->on('cows')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('milks');
    }
};
