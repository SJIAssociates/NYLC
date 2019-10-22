{{--
  Template Name: Portal Template
--}}

@extends('layouts.app')

@section('content')

@include('partials.page-header')

@if ( ! post_password_required( $post ) )
  <section class='main-content'>
    <div class='container'>
      <div class="content flex flex-wrap">
        <aside class='sidebar w-full lg:w-1/3 pr-8 xxl:py-12 xxl:pr-32'>
          <h3>Trustee Portal</h3>
          @if (has_nav_menu('trustee_navigation'))
            {!! wp_nav_menu(['theme_location' => 'trustee_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </aside>
        <main class="main w-full py-8 lg:w-2/3 xxl:py-12 ">
          @while(have_posts()) @php the_post() @endphp
            @include('partials.content-page')
          @endwhile
          <h2 class='mt-5 text-3xl'>{!! $section_title !!}</h2>
          <ul class='m-0 p-0 meeting-list'>
          @foreach($portal_calendar as $event)
            <li class='text-black text-lg text-bold pb-3'>
              <span class='date'>
                <i class='fa fa-calendar'></i> {!! $event['date'] !!}</span> - <span class='underline'>{!! $event['title'] !!}
              </span>
            </li>
          @endforeach
          </ul>
        </main>
      </div>
    </div>
  </section>
@else
<div class="container">
  <div class='content flex-flex-wrap'>

    <?php if(defined('INVALID_POST_PASS')) _e('The password you entered is funky'); ?>

    {!! get_the_password_form() !!}
  </div>
</div>
@endif
@endsection
