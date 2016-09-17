<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

         Schema::create('article_tag', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('articles_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->foreign('articles_id')->references('id')->on('articles');
            $table->foreign('tags_id')->references('id')->on('tags');
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
        Schema::drop('tags');
    }
}
