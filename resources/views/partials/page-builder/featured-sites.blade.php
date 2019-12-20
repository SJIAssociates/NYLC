{{--
$block
  featured [object]
    title [string]
    permalink [string]
    excerpt [string]
    thumbnail [string]
--}}

<section class='bg-blue-grey full-section' aria-label="{{ $block->block_type }}" id="section-{{ $block->index }}">
  <div class='container'>
    <div class='text-center mx-auto mb-10'>
      <h2><span class='bg-blue-grey'>Featured Sites</span></h2>
    </div>
    <div class='flex flex-wrap'>
        @foreach( $block->sites as $featured )
        <div class="box w-full lg:w-1/2 lg:px-10 mb-5">
          <img src="{!! $featured['thumbnail'] !!}" alt="{!! $featured['title'] !!}" class='w-full' />
          <div class='text-center bg-white p-5 mx-auto w-3/4 -mt-24 relative'>
            <h3 class='text-2xl lg:text-3xl'><a href="{!! $featured['permalink'] !!}" class='text-black'>{!! $featured['title'] !!}</a></h3>
            <p class='text-lg mt-5 px-5'>
              {!! $featured['excerpt'] !!}
            </p>
            <div class="w-full text-center">
              <a href="{!! $featured['permalink'] !!}" class='btn inline-block'>View The Sacred Site</a>
            </div>
          </div>
        </div>
        @endforeach

    </div>
  </div>
</section>
