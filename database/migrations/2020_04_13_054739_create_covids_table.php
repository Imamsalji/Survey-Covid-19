<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('a1');
            $table->integer('a2');
            $table->integer('a3');
            $table->integer('a4');
            $table->integer('a5');
            $table->integer('a6');
            $table->integer('a7');
            $table->integer('a8');
            $table->integer('a9');
            $table->integer('a10');
            $table->integer('b11');
            $table->integer('b12');
            $table->integer('b13');
            $table->integer('b14');
            $table->integer('b15');
            $table->integer('b16');
            $table->integer('c17');
            $table->integer('c18');
            $table->integer('c19');
            $table->integer('c20');
            $table->integer('c21');
            $table->integer('total');
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
        Schema::dropIfExists('covids');
    }
}
