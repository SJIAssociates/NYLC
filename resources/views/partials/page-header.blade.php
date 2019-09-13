@if ( $header_image != false )
<section class='img-bg flex justify-center items-center w-full' style="background-color: #ddd; background-image: url({{ $header_image }}); background-size: cover; background-position: 50% 50%;">
  <h1 class='text-center text-white xxl:text-5xl xxl:w-1/2'>{!! App::title() !!}</h1>
</section>
<div class="container">
{!! $breadcrumbs !!}
</div>
@else
  <div class="container">
  {!! $breadcrumbs !!}
  </div>
  <section class='page-title py-5 xxl:py-10 text-center'>
    <h1 class='text-center text-black xxl:text-5xl xxl:w-1/2 mx-auto'>{!! App::title() !!}</h1>
  </section>

@endif
