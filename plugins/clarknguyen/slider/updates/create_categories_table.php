<?php namespace ClarkNguyen\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('clarknguyen_slider_categories')) {
            Schema::create('clarknguyen_slider_categories', function($table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('name');
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('clarknguyen_slider_items_categories')) {
            Schema::create('clarknguyen_slider_items_categories', function($table)
            {
                $table->engine = 'InnoDB';
                $table->integer('item_id')->unsigned();
                $table->integer('category_id')->unsigned();
                $table->primary(['item_id', 'category_id'], 'itemid_categoryid');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('clarknguyen_slider_categories');
        Schema::dropIfExists('clarknguyen_slider_items_categories');
    }

}
