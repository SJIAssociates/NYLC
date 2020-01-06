<?php while ( have_posts() ): the_post();

$location = get_field('location');
// Address, City, State zip
if($location):
  $Fulladdress = $location['address'];

  $numberAddress = explode(",",$Fulladdress)[0];
  $city = explode(",",$Fulladdress)[1];
  $state = explode(",",$Fulladdress)[2];
endif;

$activities = get_field('activities');
?>
<article class='w-full lg:w-1/2 lg:pr-10' >
  <div class="border-b-2 w-full flex flex-wrap  py-3 lg:py-6">
    <div class="w-3/5 lg:pr-10 pr-5">
      <?php echo get_the_term_list( $post->ID, 'neighborhood', '<span class="borough text-primary font-bold uppercase inlin-block relative ml-4 text-sm">', ', ', '</span>' ) ?>

      <h3 class="entry-title mt-1 lg:mt-5 mb-0 text-base text-2xl">
        <a href="<?php the_permalink(); ?>" class='text-black hover:text-red'><?php the_title(); ?></a>
      </h3>

      <div class="entry-content lg:block">
        <?php if($location): ?>
         <address class='block mt-3'>
            <?php echo $numberAddress . ",<br />" . $city . ", " . $state; ?>
         </address>
       <?php endif; ?>
      </div>

      <ul class='activities_list block m-0 p-0 mt-5 list-none'>
        <?php
          foreach($activities as $activity):
            echo "<li class='font-bold inline-block'>" . $activity . '</li>';
          endforeach; ?>
      </ul>
    </div>
    <div class="w-2/5">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news_thumb') ?></a>
    </div>
  </div>
</article>
<?php endwhile; ?>
