@extends('layouts.app')

@section('content')

@include('partials.page-header')
<div class='text-center mx-auto'>
  <?php echo get_the_term_list( $post->ID, 'Borough', '<span class="borough text-primary font-bold uppercase inlin-block relative">', ', ', ', NY</span>' ) ?>
</div>
<div class='container'>
  <div class="content">
    <div class='flex'>
      <aside class='sidebar py-8 lg:w-1/3 xxl:py-12 pr-12 xl:pr-24'>
        <div class='widget'>
          <h3>Address</h3>
          <address>
            {!! SingleLandmark::locationAddress() !!}
          </address>
        </div>
        <div class='widget'>
          <h3>Contact</h3>
          @if(!empty($contact->email) )<a href="mailto:{!! $contact->email !!}" class='text-black block hover:text-red mb-2'>{!! $contact->email !!}</a>@endif
          @if(!empty($contact->phone) )<a href="tel:{!! $contact->phone !!}" class='text-black block hover:text-red'>{!! $contact->phone !!}</a>@endif
        </div>
        <div class='widget'>
          <h3>Follow</h3>
          @if(!empty($profile->website) )<a href="{!! $profile->website !!}" class='text-black block hover:text-red mb-2' target="_blank"  rel='noopener'aria-label='Website for Landmark'>Website</a>@endif
          @if(!empty($profile->facebook) )<a href='{!! $profile->facebook !!}' class='text-black block hover:text-red mb-2' target="_blank" rel='noopener'aria-label='Facebook Page for the Landmark'>Follow on Facebook</a>@endif
          @if(!empty($profile->twitter) )<a href='{!! $profile->twitter !!}' class='text-black block hover:text-red mb-2' target="_blank"  rel='noopener' aria-label='Twitter Page for the Landmark'>Follow on Twitter</a>@endif
        </div>
      </aside>
      <main class="main py-8 lg:w-2/3 xxl:py-12">
        @while(have_posts()) @php the_post() @endphp
          <article @php post_class() @endphp>
            <div class="entry-content">
              <h2 class='bold text-black text-2xl xxl:text-4xl mb-2'>About The Landmark</h2>
              @php the_content() @endphp
            </div>
          </article>
        @endwhile
      </main>
    </div>
  </div>
</div>
<section class='bg-blue-grey full-section'>
  <div class='container'>
    <div class='text-center mx-auto mb-10'>
      <h2><span class='bg-blue-grey'>Explore More Landmarks</span></h2>
    </div>
    <div class='flex flex-wrap'>
        @if( $prev_landmark )
        <div class="box w-full lg:w-1/2 px-10 mb-5">
          <img src='{!! $prev_landmark->thumb !!}' alt="{!! $prev_landmark->title !!}"/>
          <div class='text-center bg-white p-5 mx-auto w-3/4 -mt-24 relative'>
            <h3 class='text-2xl lg:text-3xl'><a href="{!! $prev_landmark->permalink !!}" class='text-black'>{!! $prev_landmark->title !!}</a></h3>
            <p class='text-lg mt-5 px-5'>
              {!! $prev_landmark->excerpt !!}
            </p>
            <div class="w-full text-center">
              <a href="{!! $prev_landmark->permalink !!}" class='btn inline-block'>Explore Landmark</a>
            </div>
          </div>

        </div>
        @endif
        @if( $next_landmark )
        <div class="box w-full lg:w-1/2 px-10  mb-5">
          <img src='{!! $next_landmark->thumb !!}' alt="{!! $next_landmark->title !!}"/>
          <div class='text-center bg-white p-5 mx-auto w-3/4 -mt-24 relative'>
            <h3 class='text-2xl lg:text-3xl'><a href="{!! $next_landmark->permalink !!}" class='text-black'>{!! $next_landmark->title !!}</a></h3>
            <p class='text-lg mt-5 px-5'>
              {!! $next_landmark->excerpt !!}
            </p>
            <div class="w-full text-center">
              <a href="{!! $next_landmark->permalink !!}" class='btn inline-block'>Explore Landmark</a>
            </div>
          </div>

        </div>
        @endif
    </div>
    <div class='archive-link w-full text-center mt-10'>
      <a href="/explore-ny" class='text-black text-lg uppercase underline hover:text-primary'>Explore All NY Landmarks <i class='fa fa-chevron-right'></i></a>
    </div>
  </div>
</section>

@endsection
