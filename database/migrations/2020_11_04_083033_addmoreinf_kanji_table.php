<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddmoreinfKanjiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmoreinfkanji', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kanji_id');
            $table->char('hantu')->nullable();
            $table->char('hiragana',225)->nullable();
            $table->char('hannghia')->nullable();
            $table->char('onyomi')->nullable();
            $table->char('vidu')->nullable();
            $table->char('nhatnghia')->nullable();
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
        Schema::dropIfExists('addmoreinfkanji');
    }
}
