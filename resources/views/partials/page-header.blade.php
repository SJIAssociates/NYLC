@if ( $header_image != false && !is_single() && !is_search() )
<section class='img-bg flex justify-center items-center w-full' style="background-color: #ddd; background-image: url({{ $header_image }}); background-size: cover; background-position: 50% 50%;">
  <h1 class='text-center text-white text-4xl xl:text-5xl xxl:w-1/2'>{!! App::title() !!}</h1>
</section>
    <div class="container">
    {!! $breadcrumbs !!}
    </div>
@else

@if ( is_singular('landmark') )
 {!! $tour_video!!}
@endif
  @if( get_page_template_slug() != 'views/template-portal.blade.php')
    <div class="container">
    {!! $breadcrumbs !!}
    </div>
  @endif
  @if( !is_singular('tribe_events') )
  <section class='page-title py-5 xxl:py-10 text-center'>
    <h1 class='text-center text-black xxl:text-5xl xxl:w-1/2 mx-auto'>{!! App::title() !!}</h1>
    @if(is_singular('staff') )<span class="text-primary font-bold block uppercase my-2"><?php the_staff_title(); ?></span> @endif
  </section>
  @endif
@endif
