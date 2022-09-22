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
        Schema::create('cows', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('gender');
            $table->string('breed');
            $table->date('dob');
            $table->date('next_preg_date')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->double('buying_price')->nullable();
            $table->string('milk_per_day')->nullable();
            $table->boolean('pregnant_status')->nullable();
            $table->string('type');
            $table->string('prev_vaccine')->nullable();
            $table->string('vaccines')->nullable();
            $table->date('ob_date')->nullable();
            $table->string('age');
            $table->string('h_obtain');
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
        Schema::dropIfExists('cows');
    }
};
