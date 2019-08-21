{{--
  Template Name: Home
--}}

@extends('layouts.app')



@section('content')
<section class='full-section flex items-center justify-center' id='homeLanding' style="background: url( @asset('images/landing.jpg') ); background-size:cover; background-position: center center;">
	<div class='w-full sm:w-1/3 text-center'>
		<h1 class=''>Preserving the City We Love</h1>
		<p class='text-white mx-auto font-bold mb-5'>We're on the frontlines, protecting the unique landmarks and neighborhoods that make up the heart and soul of New York.</p>
		<a href="" class='btn text-white my-4 px-12 inline-block'>About Us</a>
	</div>
</section>
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
      		  <div class='w-full md:w-1/2 flex flex-col pr-8'>
      		    <h3 class='mb-10'>We fought to save the staircase where hundreds of people fled to safety during 9/11.</h3>
      		    <div class="">
        		    <a href="" class='btn bg-red text-white inline-block mb-12 hover:no-underline'>Read The Story</a><br>
      		    </div>
      		    <a href="" class='archive-link hover:no-underline hover:no-border'>View All Success Stories <i class="fas fa-chevron-right"></i></a>
      		  </div>
      		  <div class='w-full md:w-1/2 order-first md:order-last'>
        		  <img src="@asset('images/success_placeholder.jpg')">
      		  </div>
    		  </div>
  		  </div>
		</div>
	</div>
</section>
<section class='full-section' id='homeNews'>
	<div class='container'>
		<div class='text-center'><h2><span class='bg-grey'>News</span></h2></div>
		<p class='text-black text-xxl text-center font-semibold my-3 xxl:mb-10'>Stay informed about the latest preservation issues.</p>
		<div class='flex my-8 flex-wrap'>
      @foreach($news_loop as $item)
        @include('partials/news-card')
      @endforeach
		</div>
	</div>
</section>
<section class='full-section' id='exploreHome'>
	<div class='container'>
		<div class='text-center'><h2><span>Explore NY</span></h2></div>
		<p class='text-black font-bold text-center w-1/2 mx-auto xxl:mb-10'>Visit some of New York’s best hidden gems as well as some of the classic iconic landmarks.</p>
		<div class='landmark-card'>
  		  <div class='bg-image' style="background: url( @asset('images/SS_Dyckman_farmhouse.jpg') ); background-size:cover; background-position: center center;"></div>
  		  <div class='card w-2/5 my-24 ml-32 p-12 xxl:px-32 xxl:py-24 xxl:my-48'>
    		  <h3>Dyckman Farmhouse Museum</h3>
    		  <p>The oldest remaining farmhouse in Manhattan is a Dutch Colonial style house constructed of fieldstone, brick, and wood.</p>
    		  <a href='' class='btn block mb-6'>Watch the Video</a>
    		  <br>
    		  <a ref="" class='archive-link'>Explore other NY Landmarks <i class="fas fa-chevron-right"></i></a>
  		  </div>
		</div>
	</div>
</section>
@endsection
