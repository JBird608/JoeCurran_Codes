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
                array(1, '16BsO3jwqHCWtqUu', 1, 'Motion UI (Foundation 6)', '/img/uploads/2015/Nov/09/foundation_6_motion_ui_cover.png', '/img/uploads/2015/Nov/09/foundation_6_motion_ui_sml.png', 'With the new release of Foundation 6 around the corner I take a look at one of is new features, Motion UI. A SASS library for quickly creating CSS transition and animations.', '##Motion UI \r\n\r\nBody written in Markdown. \r\n', 'foundation_6_motion_ui', 2, 3, 0, 0, 'CSS, SCSS, UI, Foundation, Motion UI, ZURB', NULL, NULL, '2015-11-09 21:43:51', '2015-11-09 21:43:51', '2015-11-09 21:43:51'),
                array(2, 'e66cVEJFY1qKn0ZM', 1, 'What makes great SEO?', '/img/uploads/2015/Nov/09/what_makes_great_seo_cover.png', '/img/uploads/2015/Nov/09/what_makes_great_seo_sml.png', 'There are many things that people claim will improve your websites SEO, but how many are true? What can you do to improve your sites SEO today? ', 'Body Goes Here Using MarkDown. ', 'what_makes_great_seo', 2, 8, 0, 0, 'SEO', NULL, NULL, '2015-11-02 21:51:28', '2015-11-09 21:51:28', '2015-11-09 21:51:28'),
                array(3, 'lHruNYg2KwJQzhxx', 1, 'Net RoundUp (November Edition)', '/img/uploads/2015/Nov/09/net_roundup_november_cover.png', '/img/uploads/2015/Nov/09/net_roundup_november_sml.png', 'In this weeks Net magazine we look into the Stretch Revolution to find out what its all about along with some other great articles.  ', '##Body', 'net_roundup_november', 2, 4, 0, 0, '', NULL, NULL, '2015-11-09 21:58:02', '2015-11-09 21:58:02', '2015-11-09 21:58:02')
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
