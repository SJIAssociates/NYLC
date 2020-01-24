<section class='main-content py-10 {{ $block->background }}' aria-label="Intro">
  <div class='container'>
    <div class='flex flex-wrap'>
    @foreach ($block->blocks as $triobox)
    <div class='w-full lg:w-1/3 text-center items-stretch flex flex-wrap flex-col mb-10'>
      <h3 class='text-3xl'>{!! $triobox['title'] !!}</h3>
      <p class='text-black w-full mx-auto flex-grow my-4 text-xl xl:px-12'>{!! $triobox['description'] !!}</p>
      <a href="" class='btn text-white  border-red inline-block font-bold w-11/12 xl:w-3/4 items-end mx-auto'>{!! $triobox['buttonText'] !!}</a>
    </div>
    @endforeach
    </div>
  </div>
</section>
