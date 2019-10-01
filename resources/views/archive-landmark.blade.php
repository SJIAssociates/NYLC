@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class='container'>
    <div class="content">
      <div class='flex'>
        <main class="main py-8 lg:w-1/2 xxl:py-12 map-list-container">
          <div class='flex flex-wrap'>
            @while (have_posts()) @php the_post() @endphp
              @include('partials.content-'.get_post_type())
            @endwhile

            {!! get_the_posts_navigation() !!}
            @php rewind_posts(); @endphp
          </div>
        </main>
        <div class='map-container py-8 lg:w-1/2 xxl:py-12'>
          <div class='acf-map'>
            @while (have_posts()) @php the_post() @endphp
            @if( !empty( ArchiveLandmark::lat() ) ):
            <div class="marker" data-lat="{!! ArchiveLandmark::lat(); !!}" data-lng="{!! ArchiveLandmark::lng(); !!}">
                  <h4><a href="{!! get_the_permalink() !!}" rel="bookmark"> {!! get_the_title() !!}</a></h4>
                  <?php echo $location->properAddress; ?>
          	</div>
            @endif
            @endwhile
          </div>
        </div>
    </div>
  </div>
</div>
<style>
.acf-map {
	width: 100%;
	height: 600px;
}
.map-list-container {
  height: 600px;
  overflow-y: scroll;
}
/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}
</style>
@endsection
