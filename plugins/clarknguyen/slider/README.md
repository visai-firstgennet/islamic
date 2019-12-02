# Slider Plugin

A simple, extensible slider, gallery platform for October CMS.

### Insert component via backend or insert code to page like the following:

```
[slider]
category = 1
sliderType = "bxSlider"
sliderPager = "true"
sliderSpeed = 800
sliderAuto = "true"
sliderShowNav = "true"
sliderShowDescription = "true"
sliderAllowClickOpenLink = "true"

[slider slider2]
category = 2
sliderType = "responsiveslides"
sliderPager = "false"
sliderSpeed = 800
sliderAuto = "true"
sliderShowNav = "true"
sliderShowDescription = "false"
sliderAllowClickOpenLink = "true"
==

{% component 'slider' %}

{% component 'slider2' %}
```

<a href="http://ehocdi.xyz/october-cms-slider/">Read more</a>