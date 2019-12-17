<section class='full-section {{ $block->acf_fc_layout }}' aria-label="{{ $block->section_title }}">
  <div class='container'>
    <div class="text-center">
      <h2><span class='bg-white'>{{ $block->section_title }}</span></h2>
    </div>
    <div class='flex success-box'>
  		  <div class='w-full p-12 xl:p-24 bg-blue-grey my-8'>
    		  <div class='flex flex-wrap'>
      		  <div class='w-full lg:w-1/2 flex flex-col pr-8 justify-center'>
      		    <h3 class='mb-10'>{{ $block->description }}</h3>
      		    <div class="button-container">
        		    <a href="{{ $block->left_link }}" class='btn bg-red text-white inline-block mb-12 hover:no-underline'> {{ $block->left_link_text }} </a><br>
      		    </div>
              @if($block->left_archive_link)
      		    <a href="{{ $block->left_archive_link }}" class='archive-link hover:no-underline hover:no-border'>{{ $block->left_archive_link_text }}<i class="fas fa-chevron-right"></i></a>
              @endif
            </div>
      		  <div class='w-full lg:w-1/2'>
        		  <img src="{{ $block->right_image['url'] }}" alt="{{ $block->section_title }}">
      		  </div>
    		  </div>
  		  </div>
		</div>
  </div>
</section>
