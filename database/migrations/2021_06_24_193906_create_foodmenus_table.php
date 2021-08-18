<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodmenus', function (Blueprint $table) {
            $table->bigIncrements('foodmenu_id');
            $table->foreignId('category_id');
            $table->string('foodmenu_name');
            $table->longText('foodmenu_detail');
            $table->text('foodmenu_image');
            $table->integer('foodmenu_status');
            $table->string('full')->nullable;
            $table->float('full_price', 10, 2)->nullable;
            $table->string('half')->nullable;
            $table->float('half_price', 10, 2)->nullable;
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
        Schema::dropIfExists('foodmenus');
    }
}
