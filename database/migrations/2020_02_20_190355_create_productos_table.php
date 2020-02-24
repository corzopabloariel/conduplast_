<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order', 4)->nullable()->default(NULL);
            $table->text('text')->nullable()->default(NULL);
            $table->text('features')->nullable()->default(NULL);
            $table->text('models')->nullable()->default(NULL);

            $table->json('images')->nullable()->default(NULL);
            $table->boolean('elim')->default(false);
            $table->unsignedBigInteger('categoria_id')->nullable()->default(NULL);

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
}
