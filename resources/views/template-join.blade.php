{{--
  Template Name: Join Template
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
<section class='full-section bg-blue-grey'>
  <div class='container'>
      <div class="text-center">
        <h2><span class='bg-grey-lightest'>Membership Levels And Benefits</span></h2>
      </div>
      <div class='flex flex-wrap'>
        @foreach($membership as $item)
        <div class='membership-wrap w-full bg-white'>
          <div class='w-full lg:w-1/4'>
            <img src="{{ $item->image }}" alt="{{ $item->title }}">
          </div>
          <div class='w-full lg:w-1/2 p-5'>
            <h3>{{ $item->title }}</h3>
            {{ $item->description }}
          </div>
          <div class='w-full lg:w-1/4 text-right'>
            <a href="{{ $item->page }}" class='btn btn-large text-white'>Join/Renew</a>
          </div>
        </div>
        @endforeach

      </div>
  </div>
</section>
@endsection
