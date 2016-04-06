<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('game_name');
            $table->string('provider_name');
            $table->string('user_key');
            $table->string('image_url');
            $table->integer('mission_id');
            $table->integer('best_score');
            $table->double('paid_primary_currency');
            $table->double('unpaid_primary_currency');
            $table->double('paid_secondary_currency');
            $table->double('unpaid_secondary_currency');
            $table->index('user_key');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('game_users');
    }
}
