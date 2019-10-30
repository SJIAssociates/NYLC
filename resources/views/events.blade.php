{{--
  Template Name: Events
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if(is_tax())
  <div class='container tax-description'>
    <div class='text-center lg:w-3/4 xxl:w-1/2 text-lg lg:text-2xl mx-auto mb-10'>
      @php echo term_description() @endphp
    </div>
  </div>
  @endif

  <div id="tribe-events-pg-template" class='mb-10'>
    @while(have_posts()) @php the_post() @endphp

    @php the_content() @endphp

    @endwhile
  </div> <!-- #tribe-events-pg-template -->
@endsection
