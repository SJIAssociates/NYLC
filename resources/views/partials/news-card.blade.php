<div class='news-card w-full bg-white mx-5 mb-5 items-stretch relative md:w-1/3 md:mb-0'>
  {!! $item['thumbnail'] !!}
  <div class="p-8 mb-10">
    <time class='text-primary mb-3 uppercase font-bold block'>{!! $item['time'] !!}</time>
    <h3 class='mb-3'><a href="{!! $item['permalink'] !!}" class="text-black">{!! $item['title'] !!}</a></h3>
    <p class='text-lg text-grey-darker font-normal'>{!! $item['content'] !!}</p>
  </div>
  <a href="{!! $item['permalink'] !!}" class='btn bg-red text-white text-center absolute' title="Read more about {!! $item['title'] !!}">Read The Update</a>
</div>
