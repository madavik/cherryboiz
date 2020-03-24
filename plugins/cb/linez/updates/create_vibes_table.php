<?php namespace Cb\Linez\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateVibesTable extends Migration
{
    public function up()
    {
        Schema::create('cb_linez_vibes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('vibe');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cb_linez_vibes');
    }
}
