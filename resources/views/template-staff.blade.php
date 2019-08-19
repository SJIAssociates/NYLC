{{--
  Template Name: Staff Template
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
    @foreach($staff_list as $item )
      @include('partials.staff' , $item)
    @endforeach
    </div>
    </div>
  @endwhile
@endsection
