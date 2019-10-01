<article @php post_class('w-full py-5 border-b-2 flex flex-wrap pr-10') @endphp data-lat="{!! $location->lat !!}" data-long="{!! $location->lng !!}">
  <div class="w-full lg:w-3/5 lg:pr-10">
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}" class='text-black hover:text-red'>{!! get_the_title() !!}</a>
    </h2>
    <?php echo get_the_term_list( $post->ID, 'Borough', '<span class="borough text-red font-bold uppercase inlin-block relative ml-8">', ', ', ', NY</span>' ) ?>
    <div class="entry-content my-5">
      @php the_excerpt() @endphp
    </div>
  </div>
  <div class="w-full lg:w-2/5">
    {!! the_post_thumbnail('news_thumb') !!}
  </div>
</article>
