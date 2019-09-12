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
  <section class='full-section' id='homeNews'>
  	<div class='container'>
  		<div class='text-center'><h2><span class='bg-grey'>Advocacy News</span></h2></div>
  		<p class='text-black text-xxl text-center font-semibold my-3 xxl:mb-10'>Stay informed about the latest preservation issues.</p>
  		<div class='flex my-8 flex-wrap'>
        @foreach($advocacy_loop as $item)
          @include('partials/box-news', $item)
        @endforeach
  		</div>
  	</div>
  </section>

@endsection
