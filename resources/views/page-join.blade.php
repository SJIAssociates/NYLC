@extends('layouts.app')

@section('content')

<section class='main-content'>
  <div class='container'>
    <div class="content flex flex-wrap">
      @if( $page_sidebar != false)
      <aside class='sidebar w-full lg:w-1/3 pr-8 xxl:py-12 xxl:pr-24'>
        @foreach($page_sidebar as $item )
          <div class='grant-sidebar'>
            <h3>{!! $item['title'] !!}</h3>
            {!! $item['content'] !!}

            @if( !empty($item['cta_text']) )
              <a href="{!! $item['cta_link'] !!}" class='btn text-white inline-block text-sm'>{!! $item['cta_text'] !!}</a>
            @endif


          </div>
        @endforeach
      </aside>
      @endif
      @if( $page_sidebar == false)
        <main class="main w-full py-8 lg:w-2/3 xxl:py-12 xxl:mx-auto">
      @else
        <main class="main w-full py-8 lg:w-2/3 xxl:py-12 ">
      @endif
        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-page')
        @endwhile
      </main>
    </div>
  </div>
</section>
<section class='full-section bg-blue-grey'>
  <div class='container'>
      <div class="text-center">
        <h2><span class='bg-grey-lightest'>Membership Levels And Benefits</span></h2>
      </div>
      <div class='flex flex-wrap'>
        @foreach($membership_options as $item)
        <div class='membership-wrap w-full bg-white flex flex-wrap my-10'>
          <div class='w-full lg:w-1/4'>
            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class='w-full'>
          </div>
          <div class='w-full lg:w-1/2 p-5'>
            <h3 class='text-3xl text-black'>{{ $item['title'] }}</h3>
            {!! $item['description'] !!}
          </div>
          <div class='w-full lg:w-1/4 text-right '>
            <a href="{{ $item['page'] }}" class='btn btn-large text-white inline-block mr-5'>Join/Renew</a>
          </div>
        </div>
        @endforeach

      </div>
  </div>
</section>
@endsection
