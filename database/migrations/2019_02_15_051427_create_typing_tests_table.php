<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypingTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typing_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('words_per_minute');
            $table->string('accuracy', 10);
            $table->integer('total_words');
            $table->integer('correct_words');
            $table->integer('incorrect_words');
            $table->integer('characters_typed');
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
        Schema::dropIfExists('typing_tests');
    }
}
