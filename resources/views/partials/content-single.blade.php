<article @php post_class() @endphp>
  <header>

    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
</article>
