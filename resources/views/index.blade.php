@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class='container'>
    <div class="content">
      <div class='flex flex-wrap'>
      @if(App\display_sidebar())
        <aside class="sidebar w-full py-8 lg:w-1/3 pr-5 xxl:pr-24">
          @include('partials.sidebar')
        </aside>
      @endif
        <main class="main py-8 w-full lg:w-2/3 xxl:py-12">
          @if (!have_posts())
            <div class="alert alert-warning">
              {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
          @endif

          @while (have_posts()) @php the_post() @endphp
            @include('partials.content-'.get_post_type())
          @endwhile

        {!! get_the_posts_navigation() !!}
      </main>
    </div>
  </div>
</div>
@endsection
