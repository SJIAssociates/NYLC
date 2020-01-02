<section class='full-section {{ $block->acf_fc_layout }}' aria-label="">
  <div class='container'>
    <div class="text-center">
      <h2><span class='bg-white'>Sacred Sites 2020</span></h2>
    </div>
    <div class='flex flex-wrap content'>
      <div class='filters w-full flex flex-wrap border-b-2 border-t-2 border-black mb-5 pt-5'>
        @foreach ($block->filters as $filter)
        <div class='facet-group w-full lg:w-1/3'>
          <h3>{{ $filter['filter_name'] }}</h3>
          @php echo do_shortcode($filter['filter_shortcode']) @endphp
        </div>
        @endforeach
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
