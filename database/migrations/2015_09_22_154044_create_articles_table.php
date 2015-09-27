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

            /**
             * Table Values & Date to be Stored
             *    Article ID         => id,
             *    Article Type       => type,
             *    Article Title      => title,
             *    Article Cover      => cover,
             *    Article Extract    => extract,
             *    Article Body       => body,
             *    Article Slug       => slug,
             *    Article Author     => author,
             *    Article Category   => category,
             *    Article Tags       => tags,
             *    Article Poll       => poll,
             *    Article Location   => location,
             *    Article Published  => published.
             */


            $table->increments('id');
            $table->integer('type')->default('1');
            $table->string('title');
            $table->string('cover')->nullable();
            $table->text('extract')->nullable();
            $table->text('body');
            // META DATA //
            $table->string('slug')->unique();
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
