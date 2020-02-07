<?php while ( have_posts() ): the_post();

$location = get_field('location');
// Address, City, State zip
if($location):
  $Fulladdress = $location['address'];

  $numberAddress = explode(",",$Fulladdress)[0];
  $city = explode(",",$Fulladdress)[1];
  $state = explode(",",$Fulladdress)[2];
endif;

$neighborhoods = get_the_term_list( $post->ID, 'neighborhood', '', ', ', '' );
if($neighborhoods == ''):

  $neighborhoods = get_field('city') . ", NY";
endif;

$activities = get_field('activities');
?>
</style>
<div class='pbt-box w-full bg-blue-grey mb-5 items-stretch relative'>
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news_thumb') ?></a>
  <div class="p-8 mb-10">
      <?php if($neighborhoods): ?>
      <span class="borough text-primary font-bold uppercase inline-block relative ml-4 text-sm  mb-5">
        <?php echo strip_tags($neighborhoods); ?>
      </span>
      <?php endif; ?>
      <h3 class="entry-title mb-0 text-base text-2xl"><a href="<?php the_permalink(); ?>" class='text-black hover:text-red'><?php the_title(); ?></a></h3>
        <?php if($location): ?>
         <address class='block mt-3 text-lg text-grey-darker font-normal mb-5'>
            <?php echo $numberAddress . ",<br />" . $city . ", " . $state; ?>
         </address>
       <?php endif;

      if( get_field('sold_out') ): ?>
        <a class="btn bg-primary block text-white uppercase text-center block absolute cursor-not-allowed opacity-50">Sold Out</a>
      <?php else: ?>
        <a class="btn bg-red text-white text-center w-full block absolute" href="<?php the_field('event_link'); ?>" target="_blank" rel="noopener" title="Register For Event">Register</a>
      <?php endif; ?>
     </div>
</div>
<?php endwhile; ?>
