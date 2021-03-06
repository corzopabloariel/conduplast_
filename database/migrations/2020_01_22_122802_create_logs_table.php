<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string( 'type' , 10 )->nullable()->default(NULL);
            $table->json( 'data' )->nullable()->default(NULL);
            $table->boolean( 'notification' )->default( false );
            $table->ipAddress( 'ip' )->default( false );
            $table->unsignedBigInteger( 'user_id' )->nullable()->default( NULL );
            
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
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
        Schema::dropIfExists('logs');
    }
}
