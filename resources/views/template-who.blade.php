{{--
  Template Name: Who We Are Template
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class='container'>
      <div class='w-full md:w-2/3 xxl:w-1/2 mx-auto mb-10 xl:text-2xl'>
        @include('partials.content-page')
      </div>
    </div>
  @endwhile
<section class='full-section bg-grey-lightest' aria-label="Board & Staff Section">
  <div class='container'>
      <div class="text-center">
        <h2><span class='bg-grey-lightest'>Board & Staff</span></h2>
      </div>
      <div class='flex flex-row py-10 items-stretch xl:px-24'>
        <div class='flex-1 w-full sm:w-1/2 flex flex-col pr-8 justify-center'>
      		    <h3 class='xxl:text-4xl xxl:pr-10'>{{ $staff_block->description }}</h3>
      		    <div class="">
        		    <a href="{{ $staff_block->link }}" class='btn bg-red text-white inline-block hover:no-underline'>Meet Our Board & Staff</a><br>
      		    </div>
      		  </div>
        <div class='flex-1 w-full sm:w-1/2'>
        		  <img src="{{ $staff_block->image['url'] }}" alt="{{ $staff_block->image['alt'] }}">
      		  </div>
      </div>
  </div>
</section>
<section class='full-section' aria-label="Annual Reports Section"  >
  <div class='container'>
    <div class="text-center">
		  <h2><span class='bg-white'>Annual Reports and 990s</span></h2>
    </div>
		<div class='flex success-box'>
  		  <div class='w-full p-12 xl:p-24 bg-blue-grey my-8'>
    		  <div class='flex flex-wrap'>
      		  <div class='w-full lg:w-1/2 flex flex-col pr-8 justify-center'>
      		    <h3 class='mb-10'>{{ $annual_report->description }}</h3>
      		    <div class="button-container">
        		    <a href="{{ $annual_report->link }}" class='btn bg-red text-white inline-block mb-12 hover:no-underline'>View 2019 Annual Report</a><br>
      		    </div>
      		    <a href="{{ $annual_report->archive_link }}" class='archive-link hover:no-underline hover:no-border'>View all annual reports and 990s <i class="fas fa-chevron-right"></i></a>
      		  </div>
      		  <div class='w-full lg:w-1/2'>
        		  <img src="{{ $annual_report->image['url'] }}" alt="{{ $annual_report->image['alt'] }}">
      		  </div>
    		  </div>
  		  </div>
		</div>
  </div>
</section>
<section class='full-section bg-blue-grey' aria-label="Press Section"  >
  <div class='container'>
    <div class="text-center">
      <h2><span class='bg-blue-grey'>Press</span></h2>
    </div>
      <div class='flex flex-wrap py-5 xxl:py-10 mx-auto xl:w-4/5'>
        @php $i = 0; @endphp
        @foreach($press_funnel as $item )

          @php $i++; @endphp

          @include('partials.press' , $item)

          @if($i == 4)
            @break
         @endif
        @endforeach
      </div>
      <a href="/who-we-are/press/" class="btn center-btn">View All Press</a>
    </div>
  </div>
</section>
<section class='full-section' id="contactSection" aria-label="Contact Us Section"  >
  <div class='container'>
    <div class="text-center">
      <h2><span class='bg-white'>Contact Us</span></h2>
    </div>
    <div class='flex flex-wrap mx-auto xl:w-4/5 mt-10'>
      <div class='w-full lg:w-1/2 lg:px-10'>
          @php echo do_shortcode('[contact-form-7 id="1192" title="Contact form 1"]'); @endphp
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


@endsection
