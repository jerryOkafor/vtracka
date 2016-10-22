<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->boolean('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('title');
            $table->string('company');
            $table->string('floor');
            $table->string('avatar_url')->default('img/img_placeholder_avatar.jpg');
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
        Schema::dropIfExists('visitors');
    }
}
