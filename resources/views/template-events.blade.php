{{--
  Template Name: Events Overview
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
<section>
  <div class='container'>
    <div class='flex success-box'>
        <div class='w-full lg:p-24 bg-blue-grey my-8'>
          @foreach($nearest_event as $item )
          <div class='flex flex-wrap'>
            <div class='box-content w-full lg:w-1/2 flex flex-wrap flex-col p-5 md:pr-8 justify-center'>
              <span class='upcoming uppercase mb-5 font-bold'>Upcoming Event</span>
              <h3 class='mb-10'>{!! $item['title'] !!}</h3>
              <span class='block mb-5 uppercase font-bold text-primary'>{!! $item['date'] !!}</span>
              <p class='text-lg lg:text-xl'>
                {!! $item['excerpt'] !!}
              </p>
              <div>
                <a href="{!! $item['link'] !!}" class='btn bg-red text-white inline-block hover:no-underline'>Learn More</a><br>
              </div>
            </div>
            <div class='box-image w-full lg:w-1/2'>
              <a href="{!! $item['link'] !!}" title="{!! $item['title'] !!}">
              {!! $item['image'] !!}
              </a>
            </div>
          </div>
          @endforeach
        </div>
    </div>

  </div>
</section>
<section class='full-section'>
  <div class='container'>
    <div class='text-center mx-auto my-8'>
      <h2><span class='bg-white'>Annual Events</span></h2>
    </div>
      <div class='flex flex-wrap'>
        @foreach($annual_events as $item)
          <div class="border p-10 w-full bg-white mx-5 mb-5 items-stretch relative flex flex-col lg:flex-1">
            <h3 class='text-2xl xxl:text-3xl mb-5'>{!! $item['title'] !!}</h3>
            <p class='flex-grow text-lg mb-5'>
              {!! $item['description'] !!}
            </p>
            @if($item['count'] > 0)
            <a href="{!! $item['permalink'] !!}" class='btn bg-red uppercase block w-full text-center'>Learn More</a>
            @else
            <a href="{!! $item['permalink'] !!}/list/?tribe_event_display=past&tribe_paged=1" class='btn bg-red uppercase block w-full text-center'>See Past Events</a>
            @endif
          </div>
        @endforeach
      </div>
  </div>
</section>
<section class='full-section'>
  <div class='container'>
    <div class='text-center mx-auto my-8'><h2><span class='bg-white'>Additional Events</span></h2></div>

    @foreach($event_type_list as $item)
      <div class='flex success-box'>
          <div class='w-full lg:p-12 xl:p-24 bg-blue-grey my-8'>
            <div class='flex flex-wrap'>
              <div class='box-content w-full lg:w-1/2 flex flex-wrap flex-col  p-5 lg:p-0 lg:pr-8'>
                <h3 class='mb-10'>{!! $item['title'] !!}</h3>
                <span class='block mb-5 uppercase font-bold'>{!! $item['count']!!}  Event Scheduled</span>
                <p class='text-xl'>
                  {!! $item['description'] !!}
                </p>
                <div>
                  <a href="{!! $item['permalink'] !!}" class='btn bg-red text-white inline-block hover:no-underline'>View Events</a><br>
                </div>
              </div>
              <div class='box-image w-full lg:w-1/2'>
                <a href="{!! $item['permalink'] !!}">
                  <img src="{!! $item['thumbnail']['sizes']['news_thumb'] !!}" alt="{!! $item['title'] !!}">
                </a>
              </div>
            </div>
          </div>
      </div>
      @endforeach

  </div>
</section>
@endsection
