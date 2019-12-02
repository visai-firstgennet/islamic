<?php namespace ClarkNguyen\Slider;

use Backend;
use System\Classes\PluginBase;
use Event;

/**
 * slider Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Sliders',
            'description' => 'Manage items to make sliders to frontend. ',
            'author'      => 'Clark Nguyen',
            'icon'        => 'icon-sliders',
            'homepage'    => 'http://ehocdi.xyz/'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'ClarkNguyen\Slider\Components\Slider' => 'slider',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'clarknguyen.slider.some_permission' => [
                'tab' => 'slider',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'slider' => [
                'label'       => 'Slider',
                'url'         => Backend::url('clarknguyen/slider/items'),
                'icon'        => 'icon-sliders',
                'permissions' => ['clarknguyen.slider.*'],
                'order'       => 500,

                'sideMenu' => [
                    'sliders' => [
                        'label'       => 'Sliders',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('clarknguyen/slider/items'),
                        'permissions' => ['clarknguyen.slider.*']
                    ],
                    'categories' => [
                        'label'       => 'Categories',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('clarknguyen/slider/categories'),
                        'permissions' => ['clarknguyen.slider.*']
                    ]
                ]
            ],
        ];
    }
}
