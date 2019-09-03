@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class='container'>
    <div class="content">
      <div class='flex'>
        <main class="main py-8 xl:w-3/4 xxl:py-12">
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
