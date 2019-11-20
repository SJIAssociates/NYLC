{{--
  Template Name: Events
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if(is_tax())
  <div class='container tax-description mb-8 pb-5'>
    <div class='text-center lg:w-3/4 xxl:w-1/2 text-lg lg:text-2xl mx-auto'>
      @php echo term_description() @endphp
    </div>
  </div>
  @endif

  <div id="tribe-events-pg-template">
    @while(have_posts()) @php the_post() @endphp

    @php the_content() @endphp

    @endwhile
  </div> <!-- #tribe-events-pg-template -->
@endsection
