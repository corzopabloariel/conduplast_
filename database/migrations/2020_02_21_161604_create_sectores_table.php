<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order', 4)->nullable()->default(NULL);
            $table->text('text')->nullable()->default(NULL);
            $table->json('productos_id')->nullable()->default(NULL);
            $table->json('images')->nullable()->default(NULL);
            $table->boolean('elim')->default(false);
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
        Schema::dropIfExists('sectores');
    }
}
