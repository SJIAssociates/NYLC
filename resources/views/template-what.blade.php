{{--
  Template Name: What We Do
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
  <section class='full-section' id="homeWhat">
  	<div class='container'>
      @include('partials/trio')
  	</div>
  </section>
<section class='full-section'>
  <div class='container'>
    <div class="text-center">
		  <h2><span class='bg-white'>Success Stories</span></h2>
    </div>
    <p class='font-bold text-center w-3/4 lg:w-3/5 mx-auto lg:text-2xl'>
      With your support, we’re proud to celebrate a history of accomplishments since our founding in 1973.
    </p>
    @foreach($success_stories_loop as $item)
      @include('partials/box-success', $item)
    @endforeach

    <a href="/success_stories" class='underline text-black mx-auto block w-1/2 text-center'>View all Success Stories <i class='fa fa-chevron-right'></i></a>
  </div>
</section>

@endsection
