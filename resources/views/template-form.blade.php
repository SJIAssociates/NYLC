{{--
  Template Name: Forms Template
--}}

@extends('layouts.app')

@section('content')
<section class='bg-grey-blue form-bg pt-10' style="background-color: #ddd; background-image: url({{ $header_image }}); background-size: cover; background-position: 50% 50%;">
  @while(have_posts()) @php the_post() @endphp
    <div class='container'>
      <div class='w-full bg-white xl:w-1/2 p-10 mt-10'>
        <h1 class='text-center text-black text-4xl'>{!! App::title() !!}</h1>
        <span class='block text-2xl text-center mx-auto my-5 text-black'>{!! $intro_text!!}</span>
        {!! $form_code!!}
      </div>
    </div>
  @endwhile
</section>
<section class=''>
  <div class='container'>
    <div class="content flex">
      @if( $page_sidebar != false)
      <aside class='sidebar py-8 lg:w-1/3 xxl:py-12 pr-10'>
        @foreach($page_sidebar as $item )
          <div class='grant-sidebar widget'>
            <h3>{!! $item['title'] !!}</h3>
            {!! $item['content'] !!}
          </div>
        @endforeach
      </aside>
      @endif
      @if( $page_sidebar != false)
        <main class="main py-8 xl:w-2/3 xxl:py-12 xxl:mx-auto">
      @else
        <main class="main py-8 lg:w-2/3 xxl:py-12 ">
      @endif
        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-page')
        @endwhile
      </main>
    </div>
  </div>
</section>
@endsection
