{{--
  Template Name: Events
--}}

@extends('layouts.app')

@section('content')

  <div id="tribe-events-pg-template">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @php the_content() @endphp
    @endwhile
  </div> <!-- #tribe-events-pg-template -->
@endsection
