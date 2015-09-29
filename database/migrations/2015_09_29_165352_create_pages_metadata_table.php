<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesMetadataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_metadata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page_code', 16)->unique();
            $table->string('page_title');
            $table->string('page_discription');
            $table->string('page_image');
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
        Schema::drop('pages_metadata');
    }
}
