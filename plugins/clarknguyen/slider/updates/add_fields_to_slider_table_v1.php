<?php namespace ClarkNguyen\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddFieldsToSliderTableVOne extends Migration
{

    public function up()
    {
        //if (!Schema::hasTable('clarknguyen_slider_items')) {
        if ( !Schema::hasColumn('clarknguyen_slider_items', 'link_when_click_on_image') ) {
            Schema::table('clarknguyen_slider_items', function ($table) {
                $table->string('link_when_click_on_image')->nullable();
            });
        }
    }

    public function down()
    {
        if ( Schema::hasColumn('clarknguyen_slider_items', 'link_when_click_on_image') ) {
            Schema::table('clarknguyen_slider_items', function ($table) {
                $table->dropColumn(['link_when_click_on_image']);
            });
        }
    }

}
