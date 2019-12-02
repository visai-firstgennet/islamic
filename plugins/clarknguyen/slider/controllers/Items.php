<?php namespace ClarkNguyen\Slider\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Items Back-end Controller
 */
class Items extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('ClarkNguyen.Slider', 'slider', 'sliders');
    }

    /*public function index()
    {
        $this->asExtension('ListController')->index();
    }*/

    /*public function listFilterExtendQuery($query, $scope)
    {
        if ( $scope->scopeName == 'category' ) {
            $query->join('clarknguyen_slider_items_categories', 'clarknguyen_slider_items_categories.item_id', '=', 'clarknguyen_slider_items.id');
            $query->join('clarknguyen_slider_categories', 'clarknguyen_slider_categories.id', '=', 'clarknguyen_slider_items_categories.category_id');
        }
    }*/
}