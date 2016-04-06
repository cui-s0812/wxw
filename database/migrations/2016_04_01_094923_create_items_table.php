<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('items', function (Blueprint $table) {
//            $table->integer('item_id');
//            $table->integer('user_id');
//            $table->double('price');
//            $table->dateTime('create_at');
//            $table->dateTime('use_at');
//            $table->timestamps();
//            $table->engine = 'InnoDB';
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
