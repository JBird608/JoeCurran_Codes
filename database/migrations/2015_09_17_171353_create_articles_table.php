<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover');
            $table->string('title');
            $table->text('extract')->nullable();
            $table->text('body');
            $table->smallInteger('author')->default(1);

            // METADATA //
            $table->string('slug');
            $table->smallInteger('category');
            $table->char('tags')->nullable();
            $table->smallInteger('location_id')->nullable();
            $table->smallInteger('poll_id')->nullable();

            // DATES //
            $table->timestamp('published');
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
        Schema::drop('articles');
    }
}
