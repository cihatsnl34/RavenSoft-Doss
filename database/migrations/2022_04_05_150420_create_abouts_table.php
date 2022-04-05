<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('firstTitle');
            $table->longText('firstText');
            $table->string('secondTitle');
            //$table->longText('secondText');
            $table->string('thirdTitle');
            $table->longText('thirdText');
            $table->string('fourTitle');
            $table->longText('fourText');
            $table->string('fiveTitle');
            $table->longText('fiveText');
            $table->string('sixTitle');
            $table->longText('sixText');
            $table->string('sevenTitle');
            $table->string('eightTitle');
            $table->longText('eightText');
            $table->string('nineTitle');
            $table->longText('nineText');
            $table->string('tenTitle');
            $table->longText('tenText');
            $table->string('elevenTitle');
            $table->longText('elevenText');
            $table->string('twelveTitle');
            $table->longText('twelveText');
            $table->string('thirteenTitle');
            $table->longText('thirteenText');
            $table->string('fourteenTitle');
            $table->longText('fourteenText');
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
        Schema::dropIfExists('abouts');
    }
}
