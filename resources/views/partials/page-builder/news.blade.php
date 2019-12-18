<section class='news_section full-section bg-blue-grey' aria-label="News Section"  >
  <div class='container'>
    <div class='text-center mb-10'>
      <h2><span class='bg-blue-grey'>{!! $block->category['name'] !!} Highlights</span></h2>
    </div>
    <div class='flex flex-wrap'>
      @foreach($news_loop as $item )
        @include('partials/box-news', $item)
      @endforeach
    </div> <!-- Main Loop -->
    <div class='flex flex-wrap py-10'>
      @foreach($news_loop_continued as $item)
          @include('partials/box-newscont', $item)
      @endforeach
    </div> <!-- Cont. Loop -->
    <div class='archive-link text-center'> <!-- Button -->
      <a href="/category/{!! $category_title->link !!}" class='underline text-black hover:text-primary'>View All Updates <i class='fa fa-chevron-right'></i></a>
    </div>
  </div>
</section>
