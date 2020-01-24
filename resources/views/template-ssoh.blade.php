{{--
  Template Name: Sacred Site Open House
--}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')

  @while(have_posts()) @php the_post() @endphp
  <section class='pb-5'>
    <div class='container'>
      @if( $subtitle )
      <h2 class='text-black text-center text-2xl lg:text-3xl mx-auto w-full lg:w-3/4 font-light mt-10 leading-normal'>{{ $subtitle }}</h2>
      @endif
    </div>
  </section>
  @endwhile

@if ($flex_generator)

  @foreach ($flex_generator as $block)

    @if ($block->block_type == 'logo')
      @include('partials.page-builder.logo')
    @endif

    @if ($block->block_type == 'image_block_right')
      @include('partials.page-builder.image_block_right')
    @endif

    @if ($block->block_type == 'contact')
      @include('partials.page-builder.contact')
    @endif

    @if ($block->block_type == 'news')
      @include('partials.page-builder.news-trio')
    @endif

    @if ($block->block_type == 'featured_site')
      @include('partials.page-builder.featured-sites')
    @endif

    @if ($block->block_type == 'intro')
      @include('partials.page-builder.intro')
    @endif

    @if ($block->block_type == 'full_width_content')
      @include('partials.page-builder.full_width_content')
    @endif

    @if ($block->block_type == 'listing')
      @include('partials.page-builder.facets_sites')
    @endif

    @if ($block->block_type == 'trio_box')
      @include('partials.page-builder.trio_box')
    @endif

  @endforeach
@endif
@endsection
