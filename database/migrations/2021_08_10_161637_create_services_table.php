<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name_cover');
            $table->string('description_cover');
            $table->string('name_section1');
            $table->string('description_section1');
            $table->string('name_section2');
            $table->string('description_section2');
            $table->string('name_section3');
            $table->string('description_section3');
            $table->string('name_section4');
            $table->string('description_section4');
            $table->string('name_section5');
            $table->string('description_section5');
            $table->string('name_section6');
            $table->string('description_section6');

            $table->string('description_footer');
            $table->string('path_logo');
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
        Schema::dropIfExists('services');
    }
}
