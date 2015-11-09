<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('article_categories')->insert(
            array(
                array('name' => 'General'),
                array('name' => 'Web Design'),
                array('name' => 'Online Resources'),
                array('name' => 'Net Magazine'),
                array('name' => 'Tips, Tricks & More'),
                array('name' => 'Web Technology'),
                array('name' => 'The Connected Web'),
                array('name' => 'Search Engine Optimisation (SEO)'),
                array('name' => 'Social Media'),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article_categories');
    }
}
