<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('type')->default(1);
            $table->string('title');
            $table->text('extract')->nullable();
            $table->text('body');

            // META DATA //
            $table->string('slug');
            $table->smallInteger('author_id')->default(1);
            $table->string('category_id');
            $table->char('tags')->nullable();
            $table->smallInteger('location')->nullable();
            $table->smallInteger('poll_id')->nullable();

            // TIMES //
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
        Schema::drop('posts');
    }
}
