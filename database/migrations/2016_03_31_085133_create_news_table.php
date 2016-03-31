<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->text('intro');
            $table->longText('content');
            $table->string('image');
            $table->string('keywords');
            $table->string('description');
            $table->timestamps();
        });
        Schema::table('products', function($table) {
             $table->integer('cate_news_id')->unsigned();
             $table->foreign('cate_news_id')->references('id')->on('cate_news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news');
    }
}
