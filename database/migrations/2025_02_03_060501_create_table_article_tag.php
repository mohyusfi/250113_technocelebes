<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArticleTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("article_id")->nullable(false);
            $table->unsignedBigInteger("tag_id")->nullable(false);
            $table->foreign("article_id", "fk_article_id")->references("id_article")->on("articles");
            $table->foreign("tag_id", "fk_tag_id")->references("id")->on("tags");
            $table->unique(['article_id', 'tag_id']);
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
        Schema::dropIfExists('article_tag');
    }
}
