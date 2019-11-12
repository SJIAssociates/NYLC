{{--
  Template Name: Portal Template
--}}

@extends('layouts.app')

@section('content')

@include('partials.page-header')

@if ( ! post_password_required( $post ) )
  <section class='main-content' aria-label="Main Content"  >
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
          @if($section_title)<h2 class='mt-10 text-3xl mb-5'>{!! $section_title !!}</h2>@endif
          <ul class='m-0 p-0 meeting-list'>
            @if($portal_calendar)
            @foreach($portal_calendar as $event)
            <li class='text-black text-lg text-bold mb-5 bg-grey-lightest flex'>
              @if( $event['date'] )
              <div class='date-block text-3xl bg-primary w-48 text-center flex flex-wrap text-white content-center justify-center'>
                <span class='date p-5 text-3xl uppercase font-light'>{!! $event['date'] !!}</span>
              </div>
              @endif
              <div class="p-5 w-full">
                <span class='font-bold text-2xl block'>{!! $event['title'] !!}</span>
                {!! $event['description'] !!}
                @if( $event['date'] && !$event['past'])
                <a href="http://www.google.com/calendar/render?action=TEMPLATE&text={!! $event['title'] !!}&dates={!! $event['calendarButton'] !!}/{!! $event['calendarButton'] !!}&ctz=America/New_York&trp=false&sprop=&sprop=name:"
                target="_blank" rel="nofollow" class='text-xs mt-5 inline-block bg-grey-darker text-white rounded-lg px-2 py-1 uppercase'>+ Google Calendar</a>
                @endif
                @if( $event['file'] )
                  <a href="{!! $event['file'] !!}" class='btn float-right text-sm m-0' download>Download File</a>
                @endif
              </div>
            </li>
            @endforeach
            @endif
          </ul>

          <ul class='directory-portal'>
            @php while(have_rows('directory')): the_row(); @endphp
            <li class='directory-person p-10 border'>
              <span class='text-2xl font-bold block'>{!! the_sub_field('name') !!}</span>
              <strong>{!! the_sub_field('business') !!}</strong>
              <div class='flex flex-wrap border-b-2 py-3'>
                <div class='w-full lg:w-1/2'>
                  <p>Business</p>
                </div>
                <div class='w-full lg:w-1/2'>

                  <address>
                    {!! the_sub_field('business_address') !!}
                  </address>
                </div>
              </div>
              <div class='flex flex-wrap border-b-2 py-3'>
                <div class='w-full lg:w-1/3'>
                  <p class='font-bold mb-0'>Work Phone</p>
                  {!! the_sub_field('work_phone') !!}
                </div>
                <div class='w-full lg:w-1/3'>
                  <p class='font-bold mb-0'>Work Fax</p>
                  {!! the_sub_field('work_fax') !!}
                </div>
                <div class='w-full lg:w-1/3'>
                  <p class='font-bold mb-0'>Email</p>
                  {!! the_sub_field('email') !!}
                </div>
              </div>
              <div class='flex flex-wrap border-b-2 py-3'>
                <div class='w-full lg:w-1/2'>
                  <p>Home Address</p>
                </div>
                <div class='w-full lg:w-1/2'>
                  <address>
                    {!! the_sub_field('home_address') !!}
                  </address>
                </div>
              </div>
              <div class='flex flex-wrap border-b-2 py-3'>
                <div class='w-full lg:w-1/2'>
                  <p>Spouse / Partner</p>
                </div>
                <div class='w-full lg:w-1/2'>
                  <address>
                    {!! the_sub_field('spouse_partner') !!}
                  </address>
                </div>
              </div>

            </li>
            @endwhile
          </ul>
        </main>
      </div>
    </div>
  </section>
@else
<div class="container">
  <div class='content flex-flex-wrap'>
    {!! get_the_password_form() !!}
  </div>
</div>
@endif
@endsection
