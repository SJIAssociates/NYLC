@extends('layouts.app')

@section('content')

@include('partials.page-header')
<div class='text-center mx-auto'>
  <?php echo get_the_term_list( $post->ID, 'Borough', '<span class="borough text-red font-bold uppercase inlin-block relative">', ', ', ', NY</span>' ) ?>
</div>
<div class='container'>
  <div class="content">
    <div class='flex'>
      <aside class='sidebar py-8 lg:w-1/3 xxl:py-12 pr-12 xl:pr-24'>
        <div class='widget'>
          <h3>Addres</h3>
          <address>
            {!! $location !!}
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
<section class='bg-grey-light full-section'>
  <div class='container'>
    <div class='text-center mx-auto'>
      <h2><span class='bg-grey-light'>Explore More Landmarks</span></h2>
    </div>
    <div class='flex flex-wrap'>

    </div>
  </div>
</section>
@endsection
