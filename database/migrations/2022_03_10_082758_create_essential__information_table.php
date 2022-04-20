<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEssentialInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('essential__information', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('degree');
            $table->string('passing_year')->nullable();
            $table->string('institutation')->nullable();
            $table->string('university')->nullable();
            $table->string('bmdc_reg_no')->nullable();
            $table->string('bmdc_reg_year')->nullable();
            $table->string('permission')->default(0);
            $table->string('deleted')->default(0);
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
        Schema::dropIfExists('essential__information');
    }
}
