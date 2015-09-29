<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('level')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                array('name' => 'System', 'email' => 'server@joecurran.codes', 'password' => bcrypt('demodemo'), 'level' => 99, 'remember_token' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
                array('name' => 'Joe Curran', 'email' => 'jbird608@gmail.com', 'password' => bcrypt('demodemo'), 'level' => 99, 'remember_token' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
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
        Schema::drop('users');
    }
}
