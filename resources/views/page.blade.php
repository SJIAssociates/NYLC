@extends('layouts.app')

@section('content')

@include('partials.page-header')
<section class='main-content entry-content' aria-label="Main Content Section">
  <div class='container'>
    @if( $subtitle )
    <h2 class='text-black text-center text-2xl lg:text-3xl mx-auto w-full lg:w-3/4 font-light mt-10 leading-normal'>{{ $subtitle }}</h2>
    @endif
    <div class="content flex flex-wrap">
      @if( $page_sidebar != false)
      <aside class='sidebar w-full lg:w-1/3 lg:pr-8 py-8 xxl:py-12 xxl:pr-24'>
        @foreach($page_sidebar as $item )
          <div class='grant-sidebar'>
            <h3>{!! $item['title'] !!}</h3>
            {!! $item['content'] !!}

            @if( !empty($item['cta_text']) )
              <a href="{!! $item['cta_link'] !!}" class='btn text-white inline-block text-sm'>{!! $item['cta_text'] !!}</a>
            @endif


          </div>
        @endforeach
      </aside>
      @endif
      @if( $page_sidebar == false)
        <main class="main w-full py-8 lg:w-2/3 xxl:py-12 mx-auto">
      @else
        <main class="main w-full py-8 lg:w-2/3 xxl:py-12 ">
      @endif
        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-page')
        @endwhile
      </main>
    </div>
  </div>
</section>

@if( $sub_pages != false)
<section class='sub_pages full-section bg-blue-grey' aria-label="Sub Pages">
  <div class='container'>
    <div class='flex flex-wrap'>
      @foreach($sub_pages as $item )
        @include('partials/box-success', $item)
      @endforeach
    </div>
  </div>
</section>
@endif

@if( $news_loop != false)
<section class='news_section full-section bg-blue-grey' aria-label="News Section"  >
  <div class='container'>
    <div class='text-center mb-10'>
      <h2><span class='bg-blue-grey'>{!! $category_title->name !!} Highlights</span></h2>
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
@endif
@endsection
