@extends('layouts.app')

@section('content')

@include('partials.page-header')
<div class='container'>
  <div class="content">
    <div class='flex flex-wrap xxl:w-3/4 mx-auto'>
      @if (App\display_sidebar())
        <aside class="sidebar w-full lg:w-1/3 pr-8 xxl:py-12 xxl:pr-32">
          <div class='widget'>
              <img src="{{ $header_image }}" alt="{!! App::title() !!} Profile Picture">
          </div>
          <div class='widget'>
            <h3>Contact</h3>
            <span class="profile-contact">
              <a href="mailto:<?php the_staff_email(); ?>"><?php the_staff_email(); ?></a>
            </span>
          </div>
        </aside>
      @endif
      <main class="main w-full py-8 lg:w-2/3 xxl:py-12 ">
      @while(have_posts()) @php the_post() @endphp
        <article @php post_class() @endphp>
          <div class="entry-content">
            @php the_content() @endphp
          </div>
        </article>
      @endwhile
  </main>
    </div>
  </div>
</div>
@endsection
