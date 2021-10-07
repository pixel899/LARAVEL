<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsAndTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_and_tags', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('news_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_and_tags');
    }
}
