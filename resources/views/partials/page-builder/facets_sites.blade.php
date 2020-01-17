<section class='full-section {{ $block->acf_fc_layout }}' aria-label="">
  <div class='container'>
    <div class='flex flex-wrap content'>
      <div class='filters w-full flex flex-wrap border-b-2 border-t-2 border-black mb-5 pt-5 items-end'>
        <div class='facet-group w-full lg:w-auto pr-5'>
          <h3 class='uppercase font-bold mb-0'>Filter Sites By:</h3>
          @php echo facetwp_display( 'facet', 'location' ) @endphp
        </div>
        <div class='facet-group w-full lg:w-auto facet-neighborhood-header  pr-5'>
          @php echo facetwp_display( 'facet', 'neighborhood' ) @endphp
        </div>
        @if($block->filters)
          @foreach ($block->filters as $filter)
          <div class='facet-group pr-5'>
            @php echo do_shortcode($filter['filter_shortcode']) @endphp
          </div>
          @endforeach
        @endif
        <button onclick="FWP.reset()" class='bg-black text-white self-end inline-block border-white border-2 hover:border-black hover:text-black px-10 py-2 mb-6 hover:bg-white lg:ml-auto w-full lg:w-auto'>Reset</button>
      </div>
      <div class='facet_template_area w-full'>
        @php echo facetwp_display( 'template', 'sacred_sites_landing' ) @endphp
      </div>
      <div class="navigation mb-10 mt-5 w-full">
        @php echo facetwp_display( 'pager' ); @endphp
      </div>
		</div>
  </div>
</section>
