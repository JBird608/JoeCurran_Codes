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
            $table->integer('type');
            $table->string('title');
            $table->string('cover')->nullable();
            $table->text('extract')->nullable();
            $table->text('body');
            // META DATA //
            $table->string('slug');
            $table->integer('author');
            $table->integer('category');
            $table->string('tags')->nullable();
            $table->integer('poll_id')->nullable();
            $table->integer('location_id')->nullable();
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
