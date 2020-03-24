<?php namespace Cb\Linez\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLineVibeTable extends Migration
{
    public function up()
    {
        Schema::create('line_vibe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('line_id');
            $table->integer('vibe_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('line_vibe');
    }
}
