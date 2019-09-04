<div class='w-full lg:w-1/2 p-5'>
  <article @php post_class() @endphp>
    <img src="" class='w-full h-24 bg-grey'/>
    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    </header>
  </article>
</div>
