(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {

	// var
	var $markers = $(document).find('.marker');

	// vars
	var args = {
		zoom		: 11.51,
		center		: new google.maps.LatLng(40.7128,-74.0070),
		mapTypeId	: google.maps.MapTypeId.ROADMAP,
		styles		: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}],
	};


	// create map
	var map = new google.maps.Map( $el[0], args);


	// add a markers reference
	map.markers = [];

	console.log(map.markers);
	// add markers
	$markers.each(function(){

    add_marker( $(this), map );

	});


	// center map
	center_map( map );


	// return
	return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html(),
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 11 );
	}
	else
	{
		// fit to bounds
		  map.setCenter( bounds.getCenter() );
	   	map.setZoom( 11 ); // Change the zoom value as required
		//map.fitBounds( bounds ); // This is the default setting which I have uncommented to stop the World Map being repeated

	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

jQuery(document).ready(function($){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

	$(document).on('facetwp-loaded', function() {
		console.log('facet reload')
			$('.map-list-container').animate({ scrollTop: 0 }, 500);

			// Remove All Markers
			remove_markers();

			//Grab all Markers on Page Currently
			var $markers = $(document).find('.marker');

			// add a markers reference
			map.markers = [];

			console.log(map.markers);
			// add markers
			$markers.each(function(){

		    add_marker( $(this), map );

			});

	 });

});



/*
*  remove_markers
*
*  This function will remove the markers
*
*  @type	function
*  @date	10/01/2019
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/


function remove_markers() {
	//Loop through all the markers and remove
 for (var i = 0; i < map.markers.length; i++) {
		 map.markers[i].setMap(null);
 }
 markers = [];
}
})(jQuery);
