<div class='flex px-5 mb-10 w-full lg:w-1/2 news_section_continued'>
  <div class='w-2/3 lg:w-4/5 pr-5'>
    <time class='text-red font-bold uppercase text-sm mb-3 block content-block'>{!! $item['time'] !!}</time>
    <h3 class='text-lg xxl:text-2xl font-bold hover:text-primary'><a href="{!! $item['permalink'] !!}" class='text-black hover:text-primary'>{!! $item['title'] !!}</a></h3>
    <p>{!! $item['content'] !!}</p>
  </div>
  <div class='w-1/3 lg:w-1/5 mt-0 lg:mt-8 img-block pr-2 lg:pr-0'>
    <a href="{!! $item['permalink'] !!}" class='text-black'>
      <img src="{!! $item['thumbnail'] !!}" alt="{!! $item['title'] !!}" class=''/>
    </a>
  </div>
</div>
