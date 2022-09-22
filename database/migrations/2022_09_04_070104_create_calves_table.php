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
        Schema::create('calves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cow_id')->nullable();
            $table->string('cname');
            $table->string('gender');
            $table->string('type');
            $table->string('h_obtain');
            $table->string('breed');
            $table->date('dob');
            $table->date('ob_date')->nullable();
            $table->boolean('status')->default(1);
            $table->foreign('cow_id')->references('id')->on('cows')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('calves');
    }
};
