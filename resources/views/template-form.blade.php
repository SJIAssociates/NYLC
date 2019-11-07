{{--
  Template Name: Forms Template
--}}

@extends('layouts.app')

@section('content')
<section class='bg-grey-blue form-bg pt-10' style="background-color: #ddd; background-image: url({{ $header_image }}); background-size: cover; background-position: 50% 50%;" aria-label="Form Section"  >
  @while(have_posts()) @php the_post() @endphp
    <div class='container'>
      <div class='w-full bg-white xl:w-1/2 p-10 mt-10'>
        <h1 class='text-center text-black text-4xl'>{!! App::title() !!}</h1>
        <span class='block text-2xl text-center mx-auto my-5 text-black'>{!! $intro_text!!}</span>
        {!! $form_code!!}
        <div class='content'>
          <div class='main'>
              @include('partials.content-page')
          </div>
        </div>
      </div>
    </div>
  @endwhile
</section>
@endsection
