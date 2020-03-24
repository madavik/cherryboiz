<?php namespace Cb\Linez\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLinesTable extends Migration
{
    public function up()
    {
        Schema::create('cb_linez_lines', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('line');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cb_linez_lines');
    }
}
