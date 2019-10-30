@extends('layouts.app')

@section('content')

@include('partials.page-header')
<div class='container'>
  <div class="content">
    <div class='flex flex-wrap xxl:w-3/4 mx-auto'>
      <aside class="sidebar w-full py-8 lg:w-2/5 lg:pr-5 xxl:py-12 xxl:pr-12">
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
      <main  class="main w-full py-8 lg:w-3/5 xxl:py-12 xxl:pl-5">
        @while(have_posts()) @php the_post() @endphp
        <article @php post_class() @endphp>
          <div class="entry-content">
            @php the_content() @endphp
          </div>
        </article>
        @endwhile
      </main>
    </div>
    <div class='w-full text-center my-10'>
      <a href="/who-we-are/board-staff" class='archive-link text-black text-lg  uppercase font-bold font-condensed hover:no-underline hover:text-primary'><span class='border-b-2 border-black hover:border-white'>Board and Staff</span> <i class='fa fa-chevron-right'></i></a>
    </div>
  </div>
</div>
@endsection
