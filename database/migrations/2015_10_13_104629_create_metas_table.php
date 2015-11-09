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
        DB::table('users')->insert(
            array(
                array('code' => '2vq4KHidVogKpgZ8', 'title' => 'Article Creation', 'discription' => ''),
                array('code' => '2vq4KHidVogKpgZe', 'title' => 'Blog', 'discription' => ''),
                array('code' => 'DGgsmT9iTEObJ1dD', 'title' => 'Web Designer & Developer :: Joe Curran Codes', 'discription' => ''),
                array('code' => 'tUZ8MMVRz6yb88iv', 'title' => 'About Joe Curran :: Joe Curran Codes', 'discription' => ''),
                array('code' => 'rJvGPUVfUxm2TBDg', 'title' => 'Get in Touch :: Joe Curran Codes', 'discription' => ''),
                array('code' => 'zbQTVfF6VfJry6LI', 'title' => 'My Projects :: Joe Curran Codes', 'discription' => ''),
                array('code' => '1o3wTvPBraUILjQZ', 'title' => 'Dashboard :: Joe Curran Codes', 'discription' => ''),
                array('code' => '5meuVGy2zOKvjsZO', 'title' => 'Once in a Blue Moon :: Joe Curran Codes', 'discription' => ''),
                array('code' => 'jeSu7UYVbVM6S0IF', 'title' => 'Create an Article :: Joe Curran Codes', 'discription' => ''),
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
        Schema::drop('metas');
    }
}
