import $ from 'jquery';
import slick from './slick';
import 'lity';

class App {

	constructor() {

	}

	init() {
		console.info( 'App Initialized' );
	}
	hamburger(element){
		this.element = element
		// Look for .hamburger
	  	let hamburger = document.querySelector(element);
		// On click
	  	hamburger.addEventListener("click", function() {
	    	// Toggle class "is-active"
	    	hamburger.classList.toggle("is-active");
	    	if (hamburger.classList.contains("is-active")){
	    		hamburger.setAttribute("aria-label", "Close Menu");
	    	} else {
	    		hamburger.setAttribute("aria-label", "Open Menu");
	    	}
	    	// Do something else, like open/close menu
	  	});
	}
	mediaSlickSlider(){

	$('.slider-for').each(function(key, item) {

		  let sliderIdName = 'slider' + key;
		  let sliderNavIdName = 'sliderNav' + key;

		  this.id = sliderIdName;
		  $('.slider-nav')[key].id = sliderNavIdName;

		  let sliderId = '#' + sliderIdName;
		  let sliderNavId = '#' + sliderNavIdName;

		  $(sliderId).slick({
		    slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  fade: true,
			  asNavFor: sliderNavId,
		  });

		  $(sliderNavId).slick({
		    slidesToShow: 4,
			  slidesToScroll: 1,
			  asNavFor: sliderId,
			  arrows: true,
			  prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous Image" type="button" style="">Previous Image</button>',
			  nextArrow: '<button class="slick-next slick-arrow" aria-label="Next Image" type="button" style="">Next Image</button>',
			  dots: false,
			  centerMode: false,
			  focusOnSelect: true,
			  responsive: 
		 		[
			 		{
			 			breakpoint: 640,
			 			settings: {
			 				slidesToShow: 3,
			 				slidesToScroll: 1,
						}
			 		}, 
			 		{
			 			breakpoint: 420,
			 			settings: {
			 				slidesToShow: 2,
			 				slidesToScroll: 1,
						}
			 		}
		 		]
		  });

		});
	}


}

export default App;