<?php namespace Cb\Linez\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateHairColorLineTable extends Migration
{
    public function up()
    {
        Schema::create('hair_color_line', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('line_id');
            $table->integer('hair_color_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hair_color_line');
    }
}
