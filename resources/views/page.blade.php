@extends('layouts.app')

@section('content')

@include('partials.page-header')
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
<section>
  <div class='container'>
    <div class='flex flex-wrap'>
      @foreach($sub_pages as $item )
        @include('partials/box-success', $item)
      @endforeach
    </div>
  </div>
</section>
@endsection
