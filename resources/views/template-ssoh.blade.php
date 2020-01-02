{{--
  Template Name: Sacred Site Open House
--}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')

  @while(have_posts()) @php the_post() @endphp
    <div class='container'>
      <div class='w-full md:w-2/3 xxl:w-1/2 mx-auto mb-10 xl:text-2xl'>
        @include('partials.content-page')
      </div>
    </div>
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


  @endforeach
@endif
@endsection
