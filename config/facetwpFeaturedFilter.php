<?php
// put featured posts first in FacetWP results
add_filter( 'facetwp_filtered_post_ids', function ( $post_ids, $class ) {

	// Lookup projects with featured meta key set to ja
	$args = array(
		'post_type'    => 'site',
		'post_status'  => 'publish',
		'meta_key'     => 'featured',
		'meta_value'   => 'yes',
		'meta_compare' => 'LIKE',
		'fields'       => 'ids',
	);

	$featured_posts_query = new WP_Query( $args );
	$featured_posts_array = $featured_posts_query->posts;

	// If a featured post, remove it from $post_ids and add it to $matches
	// We loop through $post_ids to preserve featured order
	$matches = array();
	foreach ( $post_ids as $key => $post_id ) {
		if ( in_array( $post_id, $featured_posts_array ) ) {
			$matches[] = $post_id;
			unset( $post_ids[ $key ] );
		}
	}

	// randomize post_ids

	$duration = 60; // in minutes, so 60 is one hour.
	$mins = date('i', strtotime('now'));
	$seed = $mins - ($mins % $duration);

	mt_srand($seed);
	$order = array_map(function() {return mt_rand();}, range(1, count($post_ids)));
	array_multisort($order, $post_ids);

	// Featured first, then default sort
	$post_ids = array_merge( $matches, $post_ids );

	return $post_ids;
}, 15, 2 );

add_filter( 'facetwp_query_args', 'nostromo_filter_posts', 10, 2 );
function nostromo_filter_posts( $query_args, $class ) {
  // only use these extra query args if we are using this FacetWP template
	if ( 'posts_overview' == $class->template[ 'name' ] ) {

		// add the sorting
		$query_args[ 'order' ]   = 'ASC';
		$query_args[ 'orderby' ] = 'post__in meta_value';
	}

	return $query_args;
}
