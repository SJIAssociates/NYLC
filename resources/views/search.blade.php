@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class='container'>
    <div class="content">
      <div class='flex flex-wrap xxl:w-3/4 mx-auto'>
  @if (!have_posts())
    <div class="alert alert-warning mx-auto lg:w-3/4 text-center">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>

    <form role="search" method="get" class="search-form flex my-1 mx-auto w-full lg:w-3/4 my-10" action="{{ esc_url( home_url( '/' ) ) }}">
      <label class='w-3/4 bg-grey'>
        <span class="screen-reader-text">{{ _x( 'Search for:', 'label' ) }}</span>
        <input type="search" class="search-field bg-grey" placeholder="{!! esc_attr_x( 'Search &hellip;', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
      </label>
      <button type="submit" class="search-submit" value="{{ esc_attr_x( 'Search ', 'submit button' ) }}" />
        Search <i class='fas fa-search'></i>
      </button>
    </form>

  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
    </div>
  </div>
</div>
@endsection
