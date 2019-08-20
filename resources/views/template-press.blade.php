{{--
  Template Name: Press
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
    <div class='container'>
    <div class='flex flex-row flex-wrap'>
    @foreach($press_funnel as $item )
      @include('partials.press' , $item)
    @endforeach
    </div>
    </div>
  @endwhile
@endsection
