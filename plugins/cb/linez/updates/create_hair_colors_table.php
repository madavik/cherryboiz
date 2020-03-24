<?php namespace Cb\Linez\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateHairColorsTable extends Migration
{
    public function up()
    {
        Schema::create('cb_linez_hair_colors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('color');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cb_linez_hair_colors');
    }
}
