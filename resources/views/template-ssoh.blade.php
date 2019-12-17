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
<section class='full-section bg-grey-lightest' aria-label="Featured Sites">
  <div class='container'>
      <div class="text-center">
        <h2><span class='bg-grey-lightest'>Featured Sites</span></h2>
      </div>
      <div class='flex flex-row py-10 items-stretch xl:px-24'>

      </div>
  </div>
</section>

@if ($flex_generator)

  @foreach ($flex_generator as $block)

    @if ($block->block_type == 'logo')
      @include('partials.page-builder.logo')
    @endif

    @if ($block->block_type == 'image_block_right')
      @include('partials.page-builder.image_block_right')
    @endif

  @endforeach
@endif
@endsection
