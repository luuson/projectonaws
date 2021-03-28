<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKanjiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanji', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('chapper');
            $table->char('kanji', 100);
            $table->char('hantu', 100);
            $table->char('ynghia', 100);
            $table->char('cachghinho', 225);
            $table->char('onyomi', 100);
            $table->char('kunyomi', 100);
         
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
        Schema::dropIfExists('kanji');
    }
}
