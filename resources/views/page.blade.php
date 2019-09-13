@extends('layouts.app')

@section('content')

@include('partials.page-header')
<div class='container'>
<div class="content">
  @if( $grant_sidebar != false)
  <aside class='sidebar py-8 lg:w-1/4 xxl:py-12'>
    @foreach($grant_sidebar as $item )
      <div class='grant-sidebar'>
        <h3>{!! $item['title'] !!}</h3>
        {!! $item['content'] !!}
      </div>
    @endforeach
  </aside>
  @endif
  @if( $grant_sidebar != false)
  <main class="main py-8 xl:w-3/4 xxl:py-12 xxl:mx-auto">
  @else
  <main class="main py-8 lg:w-3/4 xxl:py-12 ">
  @endif
      @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
      @endwhile
  </main>
</div>
</div>
@endsection
