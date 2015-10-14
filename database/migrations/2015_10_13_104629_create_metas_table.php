<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 16)->unique();
            $table->string('title');
            $table->string('discription');
            $table->string('image');
            $table->string('twitter_card');
            $table->string('twitter_creater');
            $table->string('small_url')->nullable();
            $table->string('og_type')->default('website');
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
        Schema::drop('metas');
    }
}
