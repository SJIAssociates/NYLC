@extends('layouts.app')

@section('content')
<div class="container">
  @include('partials.page-header')
  <div class='text-center mx-auto'>
    <?php echo get_the_term_list( $post->ID, 'Borough', '<span class="borough text-primary font-bold uppercase inlin-block relative">', ', ', ', NY</span>' ) ?>
  </div>
</div>

<div class='container'>
  <div class="content">
    <div class='flex flex-wrap'>
      <aside class='sidebar w-full py-8 lg:w-1/3 xxl:py-12 xl:pr-24'>
        <div class='widget'>
          <h3>Follow</h3>
          @if(!empty($profile->website) )<a href="{!! $profile->website !!}" class='text-black block hover:text-red mb-2' target="_blank"  rel='noopener'aria-label='Website for Landmark'>Website</a>@endif
          @if(!empty($profile->facebook) )<a href='{!! $profile->facebook !!}' class='text-black block hover:text-red mb-2' target="_blank" rel='noopener'aria-label='Facebook Page for the Landmark'>Follow on Facebook</a>@endif
          @if(!empty($profile->twitter) )<a href='{!! $profile->twitter !!}' class='text-black block hover:text-red mb-2' target="_blank"  rel='noopener' aria-label='Twitter Page for the Landmark'>Follow on Twitter</a>@endif
        </div>
        <div class='widget'>
          <h3>Address</h3>
          <address>
            {!! SingleLandmark::locationAddress() !!}
          </address>
          <a href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q={!! SingleLandmark::codedAddress() !!}" target="_blank" rel="noopner">+ Google Maps</a>
          <div class="acf-map">
              <div class="marker" data-lat="{!! SingleLandmark::lat() !!}" data-lng="{!! SingleLandmark::lng() !!}"></div>
          </div>
        </div>
      </aside>
      <main class="main w-full py-8 lg:w-2/3 xxl:py-12">
        @while(have_posts()) @php the_post() @endphp
          <article @php post_class() @endphp>
            <div class="entry-content">
              <img src="{!! the_post_thumbnail_url(); !!}" class="w-full" />
              <h2 class='bold text-black text-2xl xxl:text-4xl mb-2'>About The Sacred Site</h2>
              @php the_content() @endphp
            </div>
          </article>
        @endwhile
      </main>
    </div>
  </div>
</div>
<section class='bg-blue-grey full-section'>
  <div class='container'>
    <div class='text-center mx-auto mb-10'>
      <h2><span class='bg-blue-grey'>Explore More Landmarks</span></h2>
    </div>
    <div class='flex flex-wrap'>
        @if( $prev_landmark )
        <div class="box w-full lg:w-1/2 lg:px-10 mb-5">
          <img src='{!! $prev_landmark->thumb !!}' alt="{!! $prev_landmark->title !!}"/>
          <div class='text-center bg-white p-5 mx-auto w-3/4 -mt-24 relative'>
            <h3 class='text-2xl lg:text-3xl'><a href="{!! $prev_landmark->permalink !!}" class='text-black'>{!! $prev_landmark->title !!}</a></h3>
            <p class='text-lg mt-5 px-5'>
              {!! $prev_landmark->excerpt !!}
            </p>
            <div class="w-full text-center">
              <a href="{!! $prev_landmark->permalink !!}" class='btn inline-block'>Explore Landmark</a>
            </div>
          </div>

        </div>
        @endif
        @if( $next_landmark )
        <div class="box w-full lg:w-1/2 lg:px-10  mb-5">
          <img src='{!! $next_landmark->thumb !!}' alt="{!! $next_landmark->title !!}"/>
          <div class='text-center bg-white p-5 mx-auto w-3/4 -mt-24 relative'>
            <h3 class='text-2xl lg:text-3xl'><a href="{!! $next_landmark->permalink !!}" class='text-black'>{!! $next_landmark->title !!}</a></h3>
            <p class='text-lg mt-5 px-5'>
              {!! $next_landmark->excerpt !!}
            </p>
            <div class="w-full text-center">
              <a href="{!! $next_landmark->permalink !!}" class='btn inline-block'>Explore Landmark</a>
            </div>
          </div>

        </div>
        @endif
    </div>
    <div class='archive-link w-full text-center mt-10'>
      <a href="/explore-ny" class='text-black text-lg uppercase underline hover:text-primary'>Explore All NY Landmarks <i class='fa fa-chevron-right'></i></a>
    </div>
  </div>
</section>


<style type="text/css">
.acf-map {
    width: 100%;
    height: 250px;
    border: #ccc solid 1px;
    margin: 20px 0;
}

// Fixes potential theme css conflict.
.acf-map img {
   max-width: inherit !important;
}
</style>
<script type="text/javascript">
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
        zoom        : 14,
        mapTypeId   : google.maps.MapTypeId.ROADMAP,
        styles		: [ { "featureType": "administrative.province", "stylers": [ { "visibility": "off" } ] }, { "featureType": "landscape", "stylers": [ { "saturation": -100 }, { "lightness": 65 }, { "visibility": "on" } ] }, { "featureType": "poi", "stylers": [ { "saturation": -100 }, { "lightness": 51 }, { "visibility": "simplified" } ] }, { "featureType": "road.arterial", "stylers": [ { "saturation": -100 }, { "lightness": 30 }, { "visibility": "on" } ] }, { "featureType": "road.highway", "stylers": [ { "saturation": -100 }, { "visibility": "simplified" } ] }, { "featureType": "road.local", "stylers": [ { "saturation": -100 }, { "lightness": 40 }, { "visibility": "on" } ] }, { "featureType": "transit", "stylers": [ { "saturation": -100 }, { "visibility": "simplified" } ] }, { "featureType": "water", "elementType": "geometry", "stylers": [ { "hue": "#ffff00" }, { "saturation": -97 }, { "lightness": -25 } ] }, { "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "color": "#778391" } ] }, { "featureType": "water", "elementType": "labels", "stylers": [ { "saturation": -100 }, { "lightness": -25 }, { "visibility": "on" } ] } ],

    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

    console.log(latLng)
    // Create marker instance.
    var marker = new google.maps.Marker({
        position : new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') ),
        map: map
    });

    // Append to reference for later use.
    map.markers.push( marker );

}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

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
	}
	else
	{
		// fit to bounds
		  map.setCenter( bounds.getCenter() );

	}
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);
</script>


@endsection
