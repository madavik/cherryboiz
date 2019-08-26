<?php namespace Cb\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('cb_blog_posts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->string('signature')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cb_blog_posts');
    }
}
