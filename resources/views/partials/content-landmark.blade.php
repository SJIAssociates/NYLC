<article @php post_class('w-full py-6 border-b-2 flex flex-wrap pr-10') @endphp>
  <div class="w-full lg:w-3/5 lg:pr-10">
    <?php echo get_the_term_list( $post->ID, 'Borough', '<span class="borough text-red font-bold uppercase inlin-block relative ml-8">', ', ', ', NY</span>' ) ?>
    @if( !empty( ArchiveLandmark::lat() ) )
    <div class='marker' data-lat="{!! ArchiveLandmark::lat(); !!}" data-lng="{!! ArchiveLandmark::lng(); !!}">
      <h4><a href="{{ get_permalink() }}" class='text-black hover:text-red'>{!! get_the_title() !!}</a></h4>      
    </div>
    @endif
    <h2 class="entry-title mt-5 mb-0">
      <a href="{{ get_permalink() }}" class='text-black hover:text-red'>{!! get_the_title() !!}</a>
    </h2>

    <div class="entry-content">
      @php the_excerpt() @endphp
    </div>
  </div>
  <div class="w-full lg:w-2/5">
    {!! the_post_thumbnail('news_thumb') !!}
  </div>
</article>
