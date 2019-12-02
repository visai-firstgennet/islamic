<?php namespace ClarkNguyen\Slider\Models;

use Model;
use System\Models\File;

/**
 * Item Model
 */
class Item extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'clarknguyen_slider_items';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'categories' => [
            'ClarkNguyen\Slider\Models\Category',
            'table' => 'clarknguyen_slider_items_categories',
            'order' => 'name'
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'slider_image'  => 'System\Models\File',
    ];
    public $attachMany = [];

    /**
     * Lists posts for the front end
     * @param  array $options Display options
     * @return self
     */
    public function scopeListFrontEndCategory($query, $options)
    {
        extract(array_merge([
            'category' => false,
        ], $options));

        /*
         * Categories
         */
        if ($category !== false) {
            $query->select('clarknguyen_slider_items.*'); //must do this because it will get all columns from tables joined

            $query->join('clarknguyen_slider_items_categories', 'clarknguyen_slider_items_categories.item_id', '=', 'clarknguyen_slider_items.id');
            $query->join('clarknguyen_slider_categories', 'clarknguyen_slider_categories.id', '=', 'clarknguyen_slider_items_categories.category_id');

            $query->where('clarknguyen_slider_items_categories.category_id', $category);
            $query->groupBy('clarknguyen_slider_items_categories.item_id');
        }

        return $query;
    }

    public function scopeFilterCategories($query, $categories) {
        //$categories values that posted from form
        $query->join('clarknguyen_slider_items_categories', 'clarknguyen_slider_items_categories.item_id', '=', 'clarknguyen_slider_items.id');
        $query->join('clarknguyen_slider_categories', 'clarknguyen_slider_categories.id', '=', 'clarknguyen_slider_items_categories.category_id');
        if  ( is_array($categories) && $categories ) {
            $query->whereIn('clarknguyen_slider_items_categories.category_id', $categories);
        }
    }

}