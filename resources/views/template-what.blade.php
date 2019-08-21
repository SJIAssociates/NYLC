{{--
  Template Name: What We Do
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
  <section class='full-section' id="homeWhat">
  	<div class='container'>
  		<div class='text-center'><h2><span>What We Do</span></h2></div>
  		<p class='text-center font-bold xxl:mb-10'>Our work enriches the quality of life for all New Yorkers.</p>
  		<div class='flex my-10 flex-wrap'>
    		  <div class='w-full sm:w-1/3 text-center'>
      		  <h3 class='text-3xxl'>Advocacy</h3>
      		  <p class='text-grey-darker w-full mx-auto my-8 text-xl lg:px-20'>Giving preservation needs a powerful voice and fighting for sensible development.</p>
      		  <a href="" class='btn text-white  border-red inline-block font-bold w-1/2'>Learn about our Advocacy</a>
    		  </div>
    		  <div class='w-full sm:w-1/3 text-center'>
      		  <h3 class='text-3xxl'>Grants & Loans</h3>
      		  <p class='text-grey-darker w-full mx-auto my-8 text-xl lg:px-20'>Saving landmarked buildings, revitalizing communities, and supporting local jobs.</p>
      		  <a href="" class='btn text-white border-red inline-block font-bold w-1/2'>Learn about Grants & loans</a>
    		  </div>
    		  <div class='w-full sm:w-1/3 text-center'>
      		  <h3 class='text-3xxl'>Preservation Assistance</h3>
      		  <p class='text-grey-darker w-full mx-auto my-8 text-xl lg:px-20'>Providing expert technical services to residential, commercial and religious building owners.</p>
      		  <a href="" class='btn text-white border-red inline-block font-bold w-1/2'>Get Help</a>
    		  </div>
  		</div>
  		<div class='flex success-box'>
    		  <div class='w-full p-5 md:p-24 bg-blue-grey my-8'>
      		  <div class='flex flex-wrap'>
        		  <div class='w-full md:w-1/2 flex flex-wrap flex-col md:pr-8'>
        		    <h3 class='mb-10'>We fought to save the staircase where hundreds of people fled to safety during 9/11.</h3>
        		    <div class="">
          		    <a href="" class='btn bg-red text-white inline-block mb-12 hover:no-underline'>Read The Story</a><br>
        		    </div>
        		    <a href="" class='archive-link hover:no-underline hover:no-border'>View All Success Stories <i class="fas fa-chevron-right"></i></a>
        		  </div>
        		  <div class='box-image w-full md:w-1/2'>
          		  <img src="@asset('images/success_placeholder.jpg')">
        		  </div>
      		  </div>
    		  </div>
  		</div>
  	</div>
  </section>


@endsection
