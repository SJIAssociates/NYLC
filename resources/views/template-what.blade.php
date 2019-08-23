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
  		<div class='text-center'><h2><span>What We Do</span></h2></div>
  		<p class='text-center font-bold xxl:mb-10'>Our work enriches the quality of life for all New Yorkers.</p>

      @include('partials/trio')

      @foreach($success_stories_loop as $item)
        @include('partials/box-success', $item)
      @endforeach

      <a href="/success_stories" class='text-center text-underline text-black'>View all Success Stories</a>
  	</div>
  </section>


@endsection
