@extends('layouts.app')

@section('content')

@include('partials.page-header')
<div class='container'>
  <div class="content">
    <div class='flex xxl:w-3/4 mx-auto'>
      @if (App\display_sidebar())
        <aside class="sidebar py-8 w-1/4 pr-5">
          @include('partials.sidebar')
        </aside>
      @endif
      <main class="main py-8 xl:w-3/4 xxl:py-12">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
  </main>
    </div>
  </div>
</div>
@endsection
