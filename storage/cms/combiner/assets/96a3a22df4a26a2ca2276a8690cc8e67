jQuery(document).ready(function($) {

	$(".bxslider").each(function(index){
		var sliderElementDataObject = new SliderElementData($(this));

		$(this).bxSlider({
			mode: 'fade',
		  	captions: false,
		  	speed: sliderElementDataObject.getSliderSpeed(),
		  	pager: sliderElementDataObject.getSliderPager(),
		  	auto: sliderElementDataObject.getSliderAuto(),
		  	controls: sliderElementDataObject.getSliderShowNav(), //If true, "Next" / "Prev" controls will be added
		});
	});

	$(".rslides").each(function(index){
		var sliderElementDataObject = new SliderElementData($(this));
		$(this).responsiveSlides({
			//maxwidth: 800,
			speed: sliderElementDataObject.getSliderSpeed(),
			pager: sliderElementDataObject.getSliderPager(),
			auto: sliderElementDataObject.getSliderAuto(),
			namespace: "callbacks",
			nav: sliderElementDataObject.getSliderShowNav(), //If true, "Next" / "Prev" controls will be added
		});
	});

})

function SliderElementData(element) {	
	var sliderPager = element.attr('data-sliderpager');
	var sliderSpeed = element.attr('data-sliderspeed');
	var sliderAuto = element.attr('data-sliderauto');
	var sliderShowNav = element.attr('data-slidershownav');

	if ( sliderSpeed ) sliderSpeed = parseInt(sliderSpeed);
	else sliderSpeed = 800;

	sliderPager = sliderPager == 'true' ? true : false;
	sliderAuto = sliderAuto == 'true' ? true : false;
	sliderShowNav = sliderShowNav == 'true' ? true : false;

	this.sliderPager = sliderPager;
	this.sliderSpeed = sliderSpeed;
	this.sliderAuto = sliderAuto;
	this.sliderShowNav = sliderShowNav;

	this.getSliderPager = function() {
		return this.sliderPager;
	};
	this.getSliderSpeed = function() {
		return this.sliderSpeed;
	}
	this.getSliderAuto = function() {
		return this.sliderAuto;
	}
	this.getSliderShowNav = function() {
		return this.sliderShowNav;
	}
}