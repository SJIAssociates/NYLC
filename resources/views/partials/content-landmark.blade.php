<article @php post_class('w-full py-3 lg:py-6 border-b-2 flex flex-wrap lg:pr-10') @endphp>
  <div class="w-3/5 lg:pr-10 pr-5">
    <?php echo get_the_term_list( $post->ID, 'Borough', '<span class="borough text-primary font-bold uppercase inlin-block relative ml-4 text-sm">', ', ', ', NY</span>' ) ?>
    @if( !empty( ArchiveLandmark::lat() ) )
    <div class='marker' data-lat="{!! ArchiveLandmark::lat(); !!}" data-lng="{!! ArchiveLandmark::lng(); !!}">
      <h4><a href="{{ get_permalink() }}" class='text-black hover:text-red'>{!! get_the_title() !!}</a></h4>
    </div>
    @endif
    <h2 class="entry-title mt-1 lg:mt-5 mb-0 text-base">
      <a href="{{ get_permalink() }}" class='text-black hover:text-red'>{!! get_the_title() !!}</a>
    </h2>

    <div class="entry-content hidden lg:block">
      @php the_excerpt() @endphp
    </div>
  </div>
  <div class="w-2/5">
    <a href="{{ get_permalink() }}">{!! the_post_thumbnail('news_thumb') !!}</a>
  </div>
</article>
