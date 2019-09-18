{{--
  Template Name: Events
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div id="tribe-events-pg-template">
    @while(have_posts()) @php the_post() @endphp
    @php the_content() @endphp
    @endwhile
  </div> <!-- #tribe-events-pg-template -->
@endsection
