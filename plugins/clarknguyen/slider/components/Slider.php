<?php namespace Clarknguyen\Slider\Components;

use Cms\Classes\ComponentBase;
use Clarknguyen\Slider\Models\Item as SliderItem;
use Clarknguyen\Slider\Models\Category as SliderCategory;

class Slider extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Slider Component',
            'description' => 'Show slider items to frontend'
        ];
    }

    public function defineProperties()
    {
        return [
            'category' => [
                'title'             => 'Category',
                'type'              => 'dropdown',
                'default'           => '',
            ],
            'sliderType' => [
                'title'             => 'Slider Type',
                'type'              => 'dropdown',
                'default'           => 'bxSlider',
            ],
            'sliderPager' => [
                'title'             => 'Slider Pager show ?',
                'type'              => 'dropdown',
                'default'           => 'true',
            ],
            'sliderSpeed' => [
                'title'             => 'Slider Speed',
                'type'              => 'dropdown',
                'default'           => '800',
            ],
            'sliderAuto' => [
                'title'             => 'Slider Automatically Start',
                'type'              => 'dropdown',
                'default'           => 'true',
            ],
            'sliderShowNav' => [
                'title'             => 'Slider Show Navigation(Next, Prev)',
                'type'              => 'dropdown',
                'default'           => 'true',
            ],
            'sliderShowDescription' => [
                'title'             => 'Slider Show Description',
                'type'              => 'dropdown',
                'default'           => 'true',
            ],
            'sliderAllowClickOpenLink' => [
                'title'             => 'Allow to click on image to open link',
                'type'              => 'dropdown',
                'default'           => 'false',
            ],
        ];
    }

    public function getSliderAllowClickOpenLinkOptions()
    {
        $result = [
            'true' => 'True',
            'false' => 'False',
        ];

        return $result;
    }

    public function getSliderShowDescriptionOptions()
    {
        $result = [
            'true' => 'True',
            'false' => 'False',
        ];

        return $result;
    }

    public function getSliderShowNavOptions()
    {
        $result = [
            'true' => 'True',
            'false' => 'False',
        ];

        return $result;
    }

    public function getSliderAutoOptions()
    {
        $result = [
            'true' => 'True',
            'false' => 'False',
        ];

        return $result;
    }

    public function getSliderSpeedOptions()
    {
        $result = [];
        for ( $i = 50; $i <= 4000; $i+=10 ) {
            $result[$i] = $i;
        }
        return $result;
    }

    public function getSliderPagerOptions()
    {
        $result = [
            'true' => 'True',
            'false' => 'False',
        ];

        return $result;
    }

    public function getSliderTypeOptions()
    {
        $result = [
            'bxSlider' => 'bx Slider jquery',
            'responsiveslides' => 'responsiveslides',
        ];

        return $result;
    }

    public function getCategoryOptions()
    {
        $categories = SliderCategory::all();
        $result = [];

        foreach ( $categories as $data )
            $result[$data['id']] = $data['name'];

        return $result;
    }

    public function onRun()
    {
        $this->addCss('/plugins/clarknguyen/slider/assets/library/jquery.bxslider/css/jquery.bxslider.css');
        $this->addCss('/plugins/clarknguyen/slider/assets/css/slider.css');
        $this->addCss('/plugins/clarknguyen/slider/assets/css/responsiveslides.css');
        $this->addCss('/plugins/clarknguyen/slider/assets/css/custom.css');

        $this->addJs('/plugins/clarknguyen/slider/assets/library/jquery.bxslider/js/jquery.bxslider.js');
        $this->addJs('/plugins/clarknguyen/slider/assets/js/slider.js');
        $this->addJs('/plugins/clarknguyen/slider/assets/js/responsiveslides.min.js');
    }

    public function onRender()
    {
        // This code will be executed before the default component
        // markup is rendered on the page or layout.
        $sliderItems = SliderItem::listFrontEndCategory([
            'category'   => $this->property('category')
        ])->get();
        $sliderBlockId = 'responsiveSlider' . time();
        $this->page['sliderItems'] = $sliderItems;
        $this->page['sliderBlockId'] = $sliderBlockId;
        $this->page['sliderType'] = $this->property('sliderType');
        $this->page['sliderPager'] = $this->property('sliderPager');
        $this->page['sliderSpeed'] = $this->property('sliderSpeed');
        // var_dump($this->property('sliderAuto'));
        $this->page['sliderAuto'] = $this->property('sliderAuto');
        $this->page['sliderShowNav'] = $this->property('sliderShowNav');
        $this->page['sliderShowDescription'] = $this->property('sliderShowDescription');
        $this->page['sliderAllowClickOpenLink'] = $this->property('sliderAllowClickOpenLink');
    }
}