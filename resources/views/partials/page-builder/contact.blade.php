<section class='full-section' id="contactSection" aria-label="Contact Us Section"  >
  <div class='container'>
    <div class="text-center">
      <h2><span class='bg-white'>Contact Us</span></h2>
    </div>
    <div class='flex flex-wrap mx-auto xl:w-4/5 mt-10'>
      <div class='w-full lg:w-1/2 lg:px-10'>
          {!! $block->contact_form !!}
      </div>
      <div class='w-full lg:w-1/2 text-xl lg:px-10'>
        <div class='content-info'>
            @php dynamic_sidebar('sidebar-footer') @endphp
            <p>Have a preservation question? <a href="">Email our experts.</a></p>
    			<p class='text-grey-500 social-links'>Follow Us:
    				<a href="{{ $social->twitter }}" target="_blank" title="twitter" class="text-grey-darkest hover:text-primary hover:no-underline"><i class="fab fa-twitter"></i></a>
    				<a href="{{ $social->facebook }}" target="_blank" title="facebook" class="text-grey-darkest hover:text-primary hover:no-underline"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ $social->youtube }}" target="_blank" title="youtube" class="text-grey-darkest hover:text-primary hover:no-underline"><i class="fab fa-youtube"></i></a>
            <a href="{{ $social->instagram }}" target="_blank" title="instagram" class="text-grey-darkest hover:text-primary hover:no-underline"><i class="fab fa-instagram"></i></a>
    			</p>
        </div>
      </div>
    </div>

  </div>
</section>
