<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments__infos', function (Blueprint $table) {
            $table->id();
            $table->string('membership_category');
            $table->string('date');
            $table->string('phone')->nullable();
            $table->string('trx_id');
            $table->string('file')->nullable();
            $table->string('user_id')->unique();
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
        Schema::dropIfExists('payments__infos');
    }
}
