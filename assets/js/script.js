// JavaScript Document
$(function() {
		var $container = $('.isotope').isotope({
		itemSelector: '.isotope>.col-sm-3',
		layoutMode: 'fitRows',
		getSortData: {
		  name: '.Pname',
		  number: '.years parseInt',
		  category: '[data-category]'
		}
	  });
	
	// bind sort button click
	  $('#sorts').on( 'click', 'button', function() {
		var sortValue = $(this).attr('data-sort-value');
		$container.isotope({ sortBy: sortValue });
	  });
	  
	// filter functions
	  var filterFns = {
		// show if number is greater than 50
		numberGreaterThan50: function() {
		  var number = $(this).find('.number').text();
		  return parseInt( number, 10 ) > 50;
		},
		
		// show if name ends with -ium
			ium: function() {
			  var name = $(this).find('.name').text();
			  return name.match( /ium$/ );
			}
		  };
		  
		// bind filter button click
		  $('#filters').on( 'click', 'button', function() {
			var filterValue = $( this ).attr('data-filter');
			// use filterFn if matches value
			filterValue = filterFns[ filterValue ] || filterValue;
			$container.isotope({ filter: filterValue });
		  });
		
		  // change is-checked class on buttons
		  $('.button-group').each( function( i, buttonGroup ) {
			var $buttonGroup = $( buttonGroup );
			$buttonGroup.on( 'click', 'button', function() {
			  $buttonGroup.find('.is-checked').removeClass('is-checked');
			  $( this ).addClass('is-checked');
			});
	  });
	  

	//hover effect 
	$(' .isotope > .da-thumbs ').each( function() { $(this).hoverdir({}); } );


	//project page js
	$( ".showall" ).click(function() {
		$( ".materialList" ).hide();
		$( ".programList" ).hide();
		$( ".phaseList" ).hide();
	});
	$( ".material" ).click(function() {
		$( ".materialList" ).toggle("fast");
		$( ".programList" ).hide();
		$( ".phaseList" ).hide();
	});
	$( ".program" ).click(function() {
		$( ".programList" ).toggle("fast");
		$( ".phaseList" ).hide();
		$( ".materialList" ).hide();
	});
	
	$( ".phase" ).click(function() {
		$( ".phaseList" ).toggle("fast");
		$( ".programList" ).hide();
		$( ".materialList" ).hide();
	});
	 	
	$('.slider').sss({
		slideShow : false, // Set to false to prevent SSS from automatically animating.
		startOn : 0, // Slide to display first. Uses array notation (0 = first slide).
		transition : 400, // Length (in milliseconds) of the fade transition.
		speed : 3500, // Slideshow speed in milliseconds.
		showNav : true // Set to false to hide navigation arrows.
	});
	  
	  
	  
});