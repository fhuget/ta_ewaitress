<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaitressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waitresses', function (Blueprint $table) {
            $table->bigIncrements('waitress_id');
            $table->string('waitress_name');
            $table->string('waitress_code');
            $table->string('waitress_password');
            $table->integer('waitress_status');
            $table->datetime('added_on');
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
        Schema::dropIfExists('waitresses');
    }
}
