@extends('layouts.app')

@section('content')

@include('partials.page-header')
<div class='container'>
  <div class="content">
    <div class='flex xxl:w-3/4 mx-auto'>
      @if (App\display_sidebar())
        <aside class="sidebar py-8 w-1/4 pr-5 xxl:py-12">
          <div class='widget'>
              <img src="{{ $header_image }}" alt="{!! App::title() !!} Profile Picture">
          </div>
          <div class='widget'>
            <h3>Contact</h3>
            <span class="profile-contact">
              <i class='fa fa-envelope text-primary'></i> <a href="mailto:<?php the_staff_email(); ?>"><?php the_staff_email(); ?></a>
            </span>
          </div>
        </aside>
      @endif
      <main class="main py-8 xl:w-3/4 xxl:py-12">
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
