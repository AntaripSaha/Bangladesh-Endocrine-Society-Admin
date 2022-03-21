<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file__uploads', function (Blueprint $table) {
            $table->id();
            $table->string('nid');
            $table->string('bmdc_reg_certificate')->nullable();
            $table->string('certificate_all_degree');
            $table->string('active_perticipation')->nullable();
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
        Schema::dropIfExists('file__uploads');
    }
}
