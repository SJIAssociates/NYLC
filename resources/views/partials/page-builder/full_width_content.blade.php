<section class='full-section {{ $block->acf_fc_layout }} {{ $block->background }}' aria-label="{{ $block->section_title }}">
  <div class='container'>
    <div class="text-center">
      <h2><span class='{{ $block->background }}'>{{ $block->section_title }}</span></h2>
    </div>
    <div class='flex-wrap flex content '>
      {!! $block->content !!}
		</div>
  </div>
</section>
