{{--
  Template Name: Sacred Site Open House
--}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')

  @while(have_posts()) @php the_post() @endphp
    <div class='container'>
      <div class='w-full md:w-2/3 xxl:w-1/2 mx-auto mb-10 xl:text-2xl'>
        @include('partials.content-page')
      </div>
    </div>
  @endwhile
<section class='full-section bg-grey-lightest' aria-label="Featured Sites">
  <div class='container'>
      <div class="text-center">
        <h2><span class='bg-grey-lightest'>Featured Sites</span></h2>
      </div>
      <div class='flex flex-row py-10 items-stretch xl:px-24'>

      </div>
  </div>
</section>
<section class='full-section' aria-label="Photo Contest">
  <div class='container'>
    <div class="text-center">
      <h2><span class='bg-white'>Photo Contest</span></h2>
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
<section class='full-section' aria-label="Sponsors">
  <div class='container'>
    <div class="text-center">
      <h2><span class='bg-white'>Sponsors</span></h2>
    </div>

  </div>
</section>
<section class='full-section' aria-label="Common Bond">
  <div class='container'>
    <div class="text-center">
      <h2><span class='bg-white'>Common Bond</span></h2>
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
@endsection
