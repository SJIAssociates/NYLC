{{--
  Template Name: Advocacy
--}}

@extends('layouts.app')



@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class='container'>
      <div class='w-full md:w-2/3 xxl:w-1/2 mx-auto mb-10 xl:text-2xl'>
        @include('partials.content-page')
      </div>
    </div>
  @endwhile
  <section class='full-section bg-grey-light' id=''>
  	<div class='container'>
  		<div class='text-center'><h2><span class='bg-grey-light'>Advocacy News</span></h2></div>
  		<p class='text-black text-xxl text-center font-semibold my-3 xxl:mb-10'>Stay informed about the latest preservation issues.</p>
  		<div class='flex my-8 flex-wrap'>
        @foreach($advocacy_loop as $item)
          @include('partials/box-news', $item)
        @endforeach
  		</div>
      <div class='flex flex-wrap'>
        @foreach($advocacy_loop_continued as $item)
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
      </div>
      <div class='archive-link text-center'>
        <a href="/category/advocacy" class='underline text-black'>View All Updates <i class='fa fa-chevron-right'></i></a>
      </div>
  	</div>
  </section>

@endsection
