@extends('layouts.app')

@section('content')

@include('partials.page-header')
<ul><?php echo get_the_term_list( $post->ID, 'Borough', '<li class="jobs_item">', ', ', '</li>' ) ?></ul>
<div class='container'>
  <div class="content">
    <div class='flex'>
      <aside class='sidebar py-8 lg:w-1/3 xxl:py-12 pr-12 xxl:pr-24'>
        <div class='widget'>
          <h3>Addres</h3>
          <address>
            1234 Broadway Road,<br />
            New York, NY 10021
          </address>
        </div>
        <div class='widget'>
          <h3>Contact</h3>
          <a href="">Email:</a><br />
          <a href="">Phone:</a>
        </div>
        <div class='widget'>
          <h3>Follow</h3>
          <a href="">Website</a><br />
          <a href>Facebook</a><br />
          <a href>Twitter</a>
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
@endsection
