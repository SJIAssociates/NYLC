{{--
  Template Name: Staff Template
--}}

@extends('layouts.app')

@section('content')
<section class='main-content'>
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class='container'>
      <div class='w-full mb-10 xl:text-2xl'>
        @include('partials.content-page')
      </div>
    </div>
  @endwhile
</div>

<section class='sub_pages full-section bg-blue-grey'>
  <div class='container'>
    <h3 class='font-bold text-4xl'>Board</h3>
    <div class='flex flex-wrap'>
    <div class="w-full md:w-1/2 lg:w-1/4 text-lg pr-5">
      {!! $board_list->leaders !!}
    </div>
    <div class="w-full md:w-1/2 lg:w-1/4 text-lg pr-5">
      <p>
        {!! $board_list->col1 !!}
      </p>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/4 text-lg pr-5">
      <p>
        {!! $board_list->col2 !!}
      </p>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/4 text-lg pr-5">
      <p>
        {!! $board_list->col3 !!}
      </p>
    </div>
    </div>
  </div>
</section>
<section class='sub_pages full-section'>
  <div class='container'>
    <h3 class='font-bold text-4xl'>Advisory Council</h3>
    <div class='flex flex-wrap'>
    <div class="w-full md:w-1/2 lg:w-1/4 text-lg pr-5">
      <p>{!! $advisor_list->col1 !!}</p>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/4 text-lg pr-5">
      <p>
        {!! $advisor_list->col2 !!}
      </p>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/4 text-lg pr-5">
      <p>
        {!! $advisor_list->col3 !!}
      </p>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/4 text-lg pr-5">
      <p>
        {!! $advisor_list->col4 !!}
      </p>
    </div>
    </div>
  </div>
</section>
@endsection
