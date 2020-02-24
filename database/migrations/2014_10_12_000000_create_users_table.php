<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string( 'name' , 100 )->nullable();
            $table->string( 'email' , 150 )->nullable();
            $table->ipAddress( 'ip' )->default( false );
            $table->string( 'username' , 30 )->unique();
            $table->string( 'password' )->nullable();
            $table->integer( 'level' )->nullable();
            $table->timestamp( 'login' )->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
