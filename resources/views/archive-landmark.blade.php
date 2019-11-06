@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <section>
    <div class='container'>
      <div class='w-full md:w-2/3 mx-auto my-5 lg:my-16 xl:text-2xl'>
        <h3 class='text-center'>Discover the best of New York, from hidden gems  to iconic landmarks, through our “Tourist in your own Town” Video Series.</h3>
      </div>
    </div>
  </section>
  <div class='container'>
    <div class="content">
      <div class='flex border-b-2 border-t-2 relative'>
        <div class='w-full lg:w-1/2 borough-facet border-b-2 absolute bg-white'>
            @php echo do_shortcode('[facetwp facet="borough"]'); @endphp
            @php echo do_shortcode('[facetwp facet="landmark_categories"]'); @endphp
        </div>
        <main class="main lg:w-1/2 map-list-container lg:pt-20">
          <div class='flex flex-wrap'>
            @while (have_posts()) @php the_post() @endphp
              @include('partials.content-'.get_post_type())
            @endwhile
          </div>
        </main>
        <div class='map-container lg:w-1/2'>
          <div class='acf-map'></div>
        </div>
    </div>
    <div class="navigation mb-10 mt-5">
      <?php echo facetwp_display( 'pager' ); ?>
    </div>
  </div>
</div>
@endsection
