{{--
  Template Name: Advocacy
--}}

@extends('layouts.app')



@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class='container'>
      <div class='w-full md:w-2/3 mx-auto my-10 text-xl xl:text-2xl'>
        @if( $subtitle )
        <h2 class='text-black text-center text-2xl lg:text-3xl mx-auto w-full lg:w-3/4'>{{ $subtitle }}</h2>
        @endif
        @include('partials.content-page')
      </div>
    </div>
  @endwhile
  <section class='full-section bg-blue-grey' id=''>
  	<div class='container'>
  		<div class='text-center'><h2><span class='bg-blue-grey'>Advocacy Updates</span></h2></div>
  		<p class='text-black text-xxl text-center font-semibold my-3 xxl:mb-10'>Stay informed about the latest issues.</p>
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
      <div class=' text-center'>
        <a href="/category/advocacy" class='archive-link underline text-black w-1/2 uppercase font-bold hover:text-primary'>View All Updates <i class='fa fa-chevron-right'></i></a>
      </div>
  	</div>
  </section>

@endsection
