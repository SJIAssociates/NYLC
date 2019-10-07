{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
<section class='full-section flex items-center justify-center relative' id='homeLanding'>
  <div class='carousel-container absolute'>
    @foreach($carousel_images as $image)
      <div style="background: url({!! $image['url'] !!}); background-size: cover; background-position: 50% 50%;"  class='w-full carouselImg' id='f{!! $loop->index !!}'></div>
    @endforeach

  </div>
	<div class='w-full sm:w-1/3 text-center relative'>
		<h1 class=''>Preserving the City We Love</h1>
		<p class='text-white mx-auto font-bold mb-5'>We're on the frontlines, protecting the unique landmarks and neighborhoods that make up the heart and soul of New York.</p>
		<a href="" class='btn text-white my-4 px-12 inline-block'>About Us</a>
	</div>
</section>
<section class='full-section' id="homeWhat">
	<div class='container'>
		<div class='text-center'><h2><span class='bg-white'>What We Do</span></h2></div>
		<p class='text-center font-bold xxl:mb-10'>Our work enriches the quality of life for all New Yorkers.</p>
    <div class='flex my-10 flex-wrap'>
      @foreach($service_boxes as $item )
		    @include('partials/trio', $item)
      @endforeach
    </div>
	</div>
</section>
<section class='full-section' id='homeNews'>
	<div class='container'>
		<div class='text-center'><h2><span class='bg-grey'>News</span></h2></div>
		<p class='text-black text-xxl text-center font-semibold my-3 xxl:mb-10'>Stay informed about the latest preservation issues.</p>
		<div class='flex my-8 flex-wrap'>
      @foreach($news_loop as $item)
        @include('partials/box-news')
      @endforeach
		</div>
	</div>
</section>
<section class='full-section'>
  <div class='container'>
    <div class='text-center'><h2><span class='bg-white'>Success Stories</span></h2></div>
    <div class='flex success-box'>
        <div class='w-full p-5 md:p-24 bg-blue-grey my-8'>
          <div class='flex flex-wrap'>
            <div class='w-full md:w-1/2 flex flex-wrap flex-col md:pr-8'>
              <h3 class='mb-10'>{!! $featured_success->title !!}</h3>
              <div class="">
                <a href="{!! $featured_success->link !!}" class='btn bg-red text-white inline-block mb-12 hover:no-underline'>Read The Story</a><br>
              </div>
              <a href="/what-we-do/success-story" class='archive-link hover:no-underline hover:no-border'>View All Success Stories <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class='box-image w-full md:w-1/2'>
              <img src="{!! $featured_success->image !!}" alt="{!! $featured_success->title !!}">
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<section class='full-section' id='exploreHome'>
	<div class='container'>
		<div class='text-center'><h2><span class='bg-white'>Explore NY</span></h2></div>
		<p class='text-black font-bold text-center w-1/2 mx-auto xxl:mb-10'>Visit some of New York’s best hidden gems as well as some of the classic iconic landmarks.</p>
    @foreach($landmark as $item)
      @include('partials/landmark-card', $item)
    @endforeach
	</div>
</section>
@endsection
