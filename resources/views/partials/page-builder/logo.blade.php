<section class='full-section' aria-label="Sponsors">
  <div class='container'>
    <div class="text-center">
      <h2><span class='bg-white'>Sponsors</span></h2>
      <p>
        {{ $block->section_description }}
      </p>
    </div>
    <ul class='image-repeater m-0 p-0'>
    @foreach ($block->logos as $sponsor)
        <li class='inline-block md:w-1/4'><img src="{{ $sponsor['logo_image'] }}" alt='sponsor' class='p-3'/></li>
    @endforeach
    </ul>
  </div>
</section>
