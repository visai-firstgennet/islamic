<?php namespace ClarkNguyen\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('clarknguyen_slider_items')) {
            Schema::create('clarknguyen_slider_items', function($table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('title');
                $table->text('description');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('clarknguyen_slider_items');
    }

}
