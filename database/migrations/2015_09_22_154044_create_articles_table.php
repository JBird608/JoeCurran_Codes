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
            $table->string('page_code', 16);
            $table->integer('type')->default('1');
            $table->string('title');
            $table->string('imgfull');
            $table->string('imgsml');
            $table->text('extract')->nullable();
            $table->text('body');
            // META DATA //
            $table->string('slug')->unique();
            $table->integer('author');
            $table->integer('category');
            $table->boolean('codepen');
            $table->boolean('prism');
            $table->string('tags')->nullable();
            $table->integer('poll_id')->nullable();
            $table->integer('location_id')->nullable();
            // DATES //
            $table->timestamp('published');
            $table->timestamps();
        });
        DB::table('articles')->insert(
            array(
             array('page_code' => '16BsO3jwqHCWtqUu', 'type' => 1, 'title' => 'Motion UI (Foundation 6)',       'imgfull' => '/img/uploads/2015/Nov/09/foundation_6_motion_ui_cover.png', 'imgsml' => '/img/uploads/2015/Nov/09/foundation_6_motion_ui_sml.png', 'extract' => 'With the new release of Foundation 6 around the corner I take a look at one of is new features, Motion UI. A SASS library for quickly creating CSS transition and animations.', 'body' => '##Motion UI \r\n\r\nBody written in Markdown. \r\n',  'slug' => 'foundation_6_motion_ui', 'author' => 2, 'category' => 3, 'codepen' => 0, 'prism' => 0, 'tags' => 'CSS, SCSS, UI, Foundation, Motion UI, ZURB', 'published' => '2015-11-09 21:43:51'),
             array('page_code' => 'e66cVEJFY1qKn0ZM', 'type' => 1, 'title' => 'What makes great SEO?',          'imgfull' => '/img/uploads/2015/Nov/09/what_makes_great_seo_cover.png',   'imgsml' => '/img/uploads/2015/Nov/09/what_makes_great_seo_sml.png',   'extract' => 'There are many things that people claim will improve your websites SEO, but how many are true? What can you do to improve your sites SEO today?',                               'body' => 'Body Goes Here Using MarkDown. ',                     'slug' => 'what_makes_great_seo',   'author' => 2, 'category' => 8, 'codepen' => 0, 'prism' => 0, 'tags' => 'SEO',                                        'published' => '2015-11-02 21:51:28'),
             array('page_code' => 'lHruNYg2KwJQzhxx', 'type' => 1, 'title' => 'Net RoundUp (November Edition)', 'imgfull' => '/img/uploads/2015/Nov/09/net_roundup_november_cover.png',   'imgsml' => '/img/uploads/2015/Nov/09/net_roundup_november_sml.png',   'extract' => 'In this weeks Net magazine we look into the Stretch Revolution to find out what its all about along with some other great articles.',                                           'body' => '##Body',                                              'slug' => 'net_roundup_november',   'author' => 2, 'category' => 4, 'codepen' => 0, 'prism' => 0, 'tags' => '',                                           'published' => '2015-11-09 21:58:02')
            )
        );
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
