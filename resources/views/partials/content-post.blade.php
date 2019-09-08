
  <div class='news-card w-full bg-white mx-5 mb-5 items-stretch relative md:flex-1 lg:flex-1'>
  {!! get_the_post_thumbnail() !!}
  <div class="p-8 mb-10">
    <!-- <time class='text-primary mb-3 uppercase font-bold block'>{!! $item['time'] !!}</time> -->
    <h3 class='mb-3'><a href="{!! $item['permalink'] !!}" class="text-black">{!! get_the_title() !!}</a></h3>
    <p class='text-lg text-grey-darker font-normal'>{!! the_excerpt() !!}</p>
  </div>
  <a href="{!! get_the_permalink() !!}" class='btn bg-red text-white text-center absolute' title="Read more about {!! get_the_title() !!}">Read The Update</a>
</div>
