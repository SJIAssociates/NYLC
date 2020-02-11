@extends('layouts.app')

@section('content');

@include('partials.page-header')
<div class='container entry-content'>
  <div class="content">
    <div class='flex flex-wrap xxl:w-3/4 mx-auto'>
      @if (App\display_sidebar())
        <aside class="sidebar w-full py-8 lg:w-1/3 pr-5 xxl:pr-24">
          @include('partials.sidebar')
        </aside>
      @endif
      <main class="main py-8 w-full lg:w-2/3 xxl:py-12">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
  </main>
    </div>
  </div>

</div>
@endsection
