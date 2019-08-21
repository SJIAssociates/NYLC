<section class='full-section bg-red xl:py-24' id="supportHome">
	<div class='container'>
		<div class='text-center'><h2><span class='text-white'>Support Us</span></h2></div>
		<div class='flex justify-center flex-wrap'>
  		  <div class='card w-full bg-white p-10 text-center my-5 md:mx-5 md:w-1/3'>
    		  <h3 class='text-black text-4xl'>Donate</h3>
    		  <p class='font-grey my-5 m-auto w-3/4 block text-xl text-grey-darker '>Your donation helps us expand our reach and be your voice for preservation.</p>
    		  <a href="/donate" title="Make a Donation" class='btn border-red inline-block w-1/2'>Make A Donation</a>
  		  </div>
  		  <div class='card w-full bg-white p-10 text-center my-5 md:mx-5 md:w-1/3'>
    		  <h3 class='text-black text-4xl'>Become A Member</h3>
    		  <p class='font-grey my-5 m-auto w-3/4 block text-xl text-grey-darker'>Join the Conservancy and be part of our mission to save New York’s extraordinary architectural heritage.</p>
    		  <a href="/donate" title="Make a Donation" class='btn border-red inline-block w-1/2 '>Join Us</a>
  		  </div>
		</div>
	</div>
</section>
<section id='newsletterSignup' class='py-8 bg-blue-grey xl:py-24'>
  <div class='w-full md:w-1/2 mx-auto'>
  <h2 class='text-white text-4xl font-bold xl:mb-5'>Join Our Mailing List</h2>
  <p class='text-white w-1/2 font-bold'>Sign up to receive our free E-Newsletter, informative alerts, our monthly Mystery Landmark contest, and our monthly Tourist in Your Own Town video series.</p>

  {!! $footer_form !!}
  </div>
</section>
<footer class="content-info font-sans text-black">
  <div class="container">
	 <div class='flex'>
		<div class='w-1/3'>
  		  <h2 class='text-4xl font-bold'>Connect With Us</h2>
			@php dynamic_sidebar('sidebar-footer') @endphp
			<p>Have a preservation question? <a href="">Email our experts.</a></p>
			<p class='text-grey-500 social-links'>Follow Us:
				<a href="{{ $social->twitter }}" target="_blank" title="twitter" class="text-grey-darkest hover:text-primary hover:no-underline"><i class="fab fa-twitter"></i></a>
				<a href="{{ $social->facebook }}" target="_blank" title="facebook" class="text-grey-darkest hover:text-primary hover:no-underline"><i class="fab fa-facebook-f"></i></a>
				<a href="{{ $social->instagram }}" target="_blank" title="instagram" class="text-grey-darkest hover:text-primary hover:no-underline"><i class="fab fa-instagram"></i></a>
			</p>
			<a href="#" class='btn border border-black'>Trustee Login</a>
		</div>
		<div class='w-2/3'>
      @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => '']) !!}
      @endif
		 </div>
	 </div>
  </div>
  <div class='container'>
	  <div class='flex'>
		  <div class='w-1/2'>
			  <p class='text-normal'>@php echo date("Y") @endphp {{ get_bloginfo('name', 'display') }}. All Rights Reserved.</p>
		  </div>
		  <nav class='w-1/2 text-right'>
			  <a href="#" class='text-grey-darkest p-1 hover:text-red'>Terms of Use</a>
			  <a href="#" class='text-grey-darkest p-1 hover:text-red'>Privacy Policy</a>
			  <a href="#" class='text-grey-darkest p-1 hover:text-red'>Sitemap</a>
		  </nav>
	  </div>
  </div>
</footer>
