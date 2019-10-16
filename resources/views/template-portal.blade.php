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
          @if (has_nav_menu('trustee_navigation'))
            {!! wp_nav_menu(['theme_location' => 'trustee_navigation', 'menu_class' => 'nav']) !!}
          @endif

          @foreach($page_sidebar as $item )
            <div class='grant-sidebar'>
              <h3>{!! $item['title'] !!}</h3>
              {!! $item['content'] !!}
              @if( !empty($item['cta_text']) )
                <a href="{!! $item['cta_link'] !!}" class='btn text-white inline-block text-sm'>{!! $item['cta_text'] !!}</a>
              @endif
            </div>
          @endforeach

        </aside>
        <main class="main w-full py-8 lg:w-2/3 xxl:py-12 ">
          @while(have_posts()) @php the_post() @endphp
            @include('partials.content-page')
          @endwhile
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
