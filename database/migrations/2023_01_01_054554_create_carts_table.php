<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id');
            $table->foreignId('user_id');
            $table->string('game_title');
            $table->string('game_image')->nullable();
            $table->string('game_developer');
            $table->string('game_publisher');
            $table->text('game_description');
            $table->unsignedBigInteger('game_price');
            $table->unsignedBigInteger('total_price');
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
        Schema::dropIfExists('carts');
    }
};
