{{--
  Template Name: Events Overview
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
<section>
  <div class='container'>
    <div class='flex success-box'>
        <div class='w-full p-5 md:p-24 bg-blue-grey my-8'>
          @foreach($nearest_event as $item )
          <div class='flex flex-wrap'>
            <div class='box-content w-full md:w-1/2 flex flex-wrap flex-col md:pr-8 justify-center'>
              <span class='upcoming uppercase mb-5 font-bold'>Upcoming Event</span>
              <h3 class='mb-10'>{!! $item['title'] !!}</h3>
              <span class='block mb-5 uppercase font-bold'>{!! $item['date'] !!}</span>
              <p class='text-lg lg:text-xl'>
                {!! $item['excerpt'] !!}
              </p>
              <div>
                <a href="{!! $item['link'] !!}" class='btn bg-red text-white inline-block hover:no-underline'>Learn More</a><br>
              </div>
            </div>
            <div class='event-image w-full md:w-1/2'>
              {!! $item['image'] !!}

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
      <h2><span class='bg-white'>Annual Awards</span></h2>
    </div>
      <div class='flex flex-wrap'>
        @foreach($annual_events as $item)
          <div class="border p-10 w-full bg-white mx-5 mb-5 items-stretch relative flex flex-col lg:flex-1">
            <h3 class='text-2xl xxl:text-3xl mb-5'>{!! $item['title'] !!}</h3>
            <span class='block mb-5 uppercase font-bold'>{!! $item['count']!!} Events Scheduled</span>
            <p class='flex-grow text-lg mb-5'>
              {!! $item['description'] !!}
            </p>
            <a href="{!! $item['permalink'] !!}" class='btn bg-red uppercase block w-full text-center'>Get Tickets</a>
          </div>
        @endforeach
      </div>
  </div>
</section>
<section class='full-section'>
  <div class='container'>
    <div class='text-center mx-auto my-8'><h2><span class='bg-white'>Additional Events</span></h2></div>

      <div class='flex success-box'>
          <div class='w-full p-5 md:p-24 bg-blue-grey my-8'>
            <div class='flex flex-wrap'>
              <div class='box-content w-full md:w-1/2 flex flex-wrap flex-col md:pr-8'>
                <h3 class='mb-10'>Sacred Sites</h3>
                <span class='block mb-5 uppercase font-bold'>1 Event Scheduled</span>
                <p>
                  The Chairman's Award is bla bla bla bla
                </p>
                <div>
                  <a href="" class='btn bg-red text-white inline-block mb-12 hover:no-underline'>Learn About Sacred Sites</a><br>
                </div>
              </div>
              <div class='box-image w-full md:w-1/2'>
                <img src="">
              </div>
            </div>
          </div>
      </div>

      <div class='flex success-box'>
          <div class='w-full p-5 md:p-24 bg-blue-grey my-8'>
            <div class='flex flex-wrap'>
              <div class='box-content w-full md:w-1/2 flex flex-wrap flex-col md:pr-8'>
                <h3 class='mb-10'>Professional Circle</h3>
                <span class='block mb-5 uppercase font-bold'>1 Event Scheduled</span>
                <p>
                  The Chairman's Award is bla bla bla bla
                </p>
                <div>
                  <a href="" class='btn bg-red text-white inline-block mb-12 hover:no-underline'>Learn About Sacred Sites</a><br>
                </div>
              </div>
              <div class='box-image w-full md:w-1/2'>
                <img src="">
              </div>
            </div>
          </div>
      </div>

  </div>
</section>
@endsection
