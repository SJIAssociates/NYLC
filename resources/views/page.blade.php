@extends('layouts.app')

@section('content')

@include('partials.page-header')
<section class='main-content'>
  <div class='container'>
    <div class="content flex flex-wrap">
      @if( $page_sidebar != false)
      <aside class='sidebar w-full lg:w-1/3 pr-8 xxl:py-12 xxl:pr-40'>
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
        <main class="main w-full py-8 lg:w-2/3 xxl:py-12 xxl:mx-auto">
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
<section class='sub_pages full-section bg-blue-grey'>
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
<section class='news_section full-section bg-blue-grey'>
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
        <div class='flex px-5 mb-10 w-full lg:w-1/2'>
          <div class='w-4/5'>
            <time class='text-red font-bold uppercase text-sm mb-3 block'>{!! $item['time'] !!}</time>
            <h3 class='text-lg xxl:text-2xl font-bold'><a href="{!! $item['permalink'] !!}" class='text-black'>{!! $item['title'] !!}</a></h3>
            <p>{!! $item['content'] !!}</p>
          </div>
          <div class='w-1/5'>
            <img src="{!! $item['thumbnail'] !!}" />
          </div>
        </div>

      @endforeach
    </div> <!-- Cont. Loop -->
    <div class='archive-link text-center'> <!-- Button -->
      <a href="/category/{!! $category_title->link !!}" class='underline text-black'>View All Updates <i class='fa fa-chevron-right'></i></a>
    </div>
  </div>
</section>
@endif
@endsection
