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
                  <a href="{!! $event['file'] !!}" class='btn float-right text-sm m-0' download>Download</a>
                @endif
              </div>
            </li>
            @endforeach
            @endif
          </ul>

          <ul class='directory-portal'>
            @php while(have_rows('directory')): the_row(); @endphp
            <li class='directory-person p-10 border'>
              <div class='w-full flex flex-wrap pb-3'>
                @if( get_sub_field('profile_picture') )
                  <img src="{!! the_sub_field('profile_picture') !!}" alt="{!! the_sub_field('name') !!} Profile Picture" class='lg:w-32 mr-8'/>
                @endif
                <div class="">
                  <span class='text-2xl lg:text-3xl font-bold block'>{!! the_sub_field('name') !!}</span>
                  <strong class='block py-1'>{!! the_sub_field('business') !!}</strong>
                  <a href="mailto:{!! the_sub_field('email') !!}" title="Email for {!! the_sub_field('name') !!}" class='block py-1'>{!! the_sub_field('email') !!}</a>
                  <a href="tel:{!! the_sub_field('personal_phone') !!}"  class='block py-1'>{!! the_sub_field('personal_phone') !!}</a>
                </div>
              </div>
              @if(get_sub_field('business_address'))
              <div class='flex flex-wrap border-t-2 py-3'><!-- Business -->
                <div class='w-full lg:flex-1'>
                  <p class='font-bold'>Work</p>
                  <address>
                    {!! the_sub_field('business_address') !!}
                  </address>
                </div>
                <div class='w-full lg:flex-1'>
                  <p class='font-bold mb-0 mt-5'>Work Phone</p>
                  <span class='block mb-5'>{!! the_sub_field('work_phone') !!}</span>

                  <p class='font-bold mb-0'>Work Fax</p>
                  <span>{!! the_sub_field('work_fax') !!}</span>
                </div>
                @if(get_sub_field('assistant'))
                <div class='w-full lg:flex-1'>
                  <p class='font-bold mb-0 mt-5 mb-1'>Assistant</p>
                  <span class='block'>{!! the_sub_field('assistant') !!}</span>
                  <a href="mailto:{!! the_sub_field('assistant_email') !!}" title="Email for {!! the_sub_field('assistant') !!}" class='block py-1'>{!! the_sub_field('assistant_email') !!}</a>
                  <a href="tel:{!! the_sub_field('assistant_phone') !!}"  class='block py-1'>{!! the_sub_field('assistant_phone') !!}</a>
                </div>
                @endif
              </div>
              @endif
              @if(get_sub_field('home_address'))
              <div class='flex flex-wrap border-t-2 pt-3'>
                <div class='w-full lg:w-1/2'>
                  <p class='font-bold'>Home</p>
                  <address>{!! the_sub_field('home_address') !!}</address>
                </div>
                @if(get_sub_field('spouse_partner'))
                <div class='w-full lg:w-1/2'>
                  <p class='m-0 font-bold mt-3'>Spouse / Partner</p>
                  <p class='m-0'>{!! the_sub_field('spouse_partner') !!}</p>
                </div>
                @endif
              </div>
              @endif
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
