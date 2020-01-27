@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class='container'>
    <div class="content">
      <div class='flex sji-filters-top'>
        <aside class='aside py-8 lg:w-1/4 xxl:py-12'>
            <h3>Location</h3>
            @php echo do_shortcode('[facetwp facet="location"]'); @endphp
            <h3 class='facet-neighborhood-header'>Neighborhood</h3>
            @php echo do_shortcode('[facetwp facet="neighborhood"]'); @endphp
            <h3>Activities</h3>
            @php echo do_shortcode('[facetwp facet="activities"]'); @endphp
            <h3>Search</h3>
            @php echo do_shortcode('[facetwp facet="name"]'); @endphp
        </aside>
        <main class="main py-8 lg:w-3/4 xxl:py-12">
          @if (!have_posts())
            <div class="alert alert-warning">
              {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
          @endif
          <div class='flex flex-wrap'>
            @while (have_posts()) @php the_post() @endphp
              @include('partials.content-'.get_post_type())
            @endwhile
          </div>
        {!! get_the_posts_navigation() !!}
      </main>
    </div>
  </div>
</div>
@endsection
