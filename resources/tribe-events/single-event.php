<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>
  	<?php the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' ); ?>

<div class="flex">
  <aside class='sidebar py-8 lg:w-1/4 xxl:py-12 pr-10'>
    <!-- Event meta -->
    <?php
      do_action( 'tribe_events_single_event_before_the_meta' );

      tribe_get_template_part( 'modules/meta' );

      do_action( 'tribe_events_single_event_after_the_meta' );
    ?>
  </aside>
  <div id="tribe-events-content" class="tribe-events-single main py-8 lg:w-3/4 xxl:py-12">
  	<!-- Notices -->
  	<?php tribe_the_notices() ?>

  	<div class="tribe-events-schedule tribe-clearfix">
  		<?php echo tribe_events_event_schedule_details( $event_id, '<h2>', '</h2>' ); ?>
  		<?php if ( tribe_get_cost() ) : ?>
  			<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
  		<?php endif; ?>
  	</div>
  		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  			<!-- Event featured image, but exclude link -->
  			<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>

  			<!-- Event content -->
  			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
  			<div class="tribe-events-single-event-description tribe-events-content">
  				<?php the_content(); ?>
  			</div>
  			<!-- .tribe-events-single-event-description -->
  			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
  		</div> <!-- #post-x -->
  </div><!-- #tribe-events-content -->
</div>
