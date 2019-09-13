@extends('layouts.app')

@section('content')

@include('partials.page-header')
<div class='container'>
<div class="content">
  @if( $grant_sidebar != false)
  <aside class='sidebar'>
    @foreach($grant_sidebar as $item )

      <div class='widget'>
        <h3>{!! $item['title'] !!}</h3>
        {!! $item['content'] !!}
      </div>

    @endforeach
  </aside>
  @endif
  <main class="main py-8 xxl:w-3/4 xxl:py-12 xxl:mx-auto">
      @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
      @endwhile
  </main>
</div>
</div>
@endsection
