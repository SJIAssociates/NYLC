
  <div class='news-card w-full bg-white mb-5 items-stretch relative'>
  {!! get_the_post_thumbnail() !!}
  <div class="p-8 mb-10">
    <h3 class='mb-3'><a href="{!! get_the_permalink(); !!}" class="text-black">{!! get_the_title() !!}</a></h3>
    <p class='text-lg text-grey-darker font-normal'>{!! the_excerpt() !!}</p>
  </div>
  <a href="{!! get_the_permalink() !!}" class='btn bg-red text-white text-center absolute' title="Read more about {!! get_the_title() !!}">Read The Update</a>
</div>
