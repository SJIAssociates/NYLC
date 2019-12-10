{{--
  Template Name: Portal Template
--}}

@extends('layouts.app')

@section('content')

@include('partials.page-header')
<style>
  .modal {
    transition: opacity 0.25s ease;
    top: 0;
    left: 0;
    z-index: 999;
  }
  body.modal-active {
    overflow-x: hidden;
    overflow-y: hidden;
  }
  .modal-content {
    max-height: 100vh;
  }
  .modal-close.absolute {
    top: 0;
    right: 0;
  }
  .modal-header {
    right: 15px;
    position: absolute;
  }
</style>
@if ( ! post_password_required( $post ) )
  <section class='main-content' aria-label="Main Content"  >
    <div class='container'>
      <div class="content flex flex-wrap">
        <aside class='sidebar w-full lg:w-1/3 pr-8 xxl:py-12 xxl:pr-32'>
          <h3>Trustee Portal</h3>
          @if (has_nav_menu('trustee_navigation'))
            {!! wp_nav_menu(['theme_location' => 'trustee_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </aside>
        <main class="main w-full py-8 lg:w-2/3 xxl:py-12 ">
          @while(have_posts()) @php the_post() @endphp
            @include('partials.content-page')
          @endwhile

          @if($section_title)<h2 class='mt-10 text-3xl mb-5'>{!! $section_title !!}</h2>@endif

          @if($portal_calendar)
            <ul class='m-0 p-0 meeting-list'>
              @foreach($portal_calendar as $event)
                <li class='text-black text-lg text-bold mb-5 bg-grey-lightest flex'>
              @if( $event['date'] )
              <div class='date-block text-3xl bg-primary w-48 text-center flex flex-wrap text-white content-center justify-center'>
                <span class='date p-5 text-3xl uppercase font-light'>{!! $event['date'] !!}</span>
              </div>
              @endif
              <div class="p-5 w-full">
                <span class='font-bold text-2xl block'>{!! $event['title'] !!}</span>
                {!! $event['description'] !!}
                @if( $event['date'] && !$event['past'])
                <a href="http://www.google.com/calendar/render?action=TEMPLATE&text={!! $event['title'] !!}&dates={!! $event['calendarButton'] !!}/{!! $event['calendarButton'] !!}&ctz=America/New_York&trp=false&sprop=&sprop=name:"
                target="_blank" rel="nofollow" class='text-xs mt-5 inline-block bg-grey-darker text-white rounded-lg px-2 py-1 uppercase'>+ Google Calendar</a>
                @endif
                @if( $event['file'] )
                  <a href="{!! $event['file'] !!}" class='btn float-right text-sm m-0' download>Download</a>
                @endif
              </div>
            </li>
              @endforeach
          </ul>
          @endif

          @if(have_rows('directory'))
            <!-- Directory List -->
            <ul class='directory-portal flex flex-wrap'>
            @php while(have_rows('directory')): the_row(); @endphp
            <li data-id="@php echo  'person_' . get_row_index() @endphp" class='directory-person modal-open cursor-pointer p-3 w-full lg:w-1/2  hover:text-primary cursor-pointer'>
              <span class='hover:text-primary w-full font-bold text-lg'>{!! the_sub_field('name') !!}</span>
              <strong class='block py-1 text-primary'>{!! the_sub_field('business') !!}</strong>
              <div class='directory-person p-10 hidden' id="@php echo  'person_' . get_row_index() @endphp">
                <div class='w-full flex flex-wrap pb-3'>
                  @if( get_sub_field('profile_picture') )
                    <img src="{!! the_sub_field('profile_picture') !!}" alt="{!! the_sub_field('name') !!} Profile Picture" class='lg:w-32 mr-8'/>
                  @endif
                  <div class="">
                    <span class='text-2xl lg:text-3xl font-bold block'>{!! the_sub_field('name') !!}</span>
                    <strong class='block py-1'>{!! the_sub_field('business') !!}</strong>
                    <a href="mailto:{!! the_sub_field('email') !!}" title="Email for {!! the_sub_field('name') !!}" class='block py-1'>{!! the_sub_field('email') !!}</a>
                    <a href="tel:{!! the_sub_field('personal_phone') !!}"  class='block py-1'>{!! the_sub_field('personal_phone') !!}</a>
                  </div>
                </div>
                @if(get_sub_field('business_address'))
                <div class='flex flex-wrap border-t-2 py-3'><!-- Business -->
                  <div class='w-full lg:flex-1'>
                    <p class='font-bold'>Work</p>
                    <address>
                      {!! the_sub_field('business_address') !!}
                    </address>
                  </div>
                  <div class='w-full lg:flex-1'>
                    <p class='font-bold mb-0 mt-5'>Work Phone</p>
                    <span class='block mb-5'>{!! the_sub_field('work_phone') !!}</span>

                    <p class='font-bold mb-0'>Work Fax</p>
                    <span>{!! the_sub_field('work_fax') !!}</span>
                  </div>
                  @if(get_sub_field('assistant'))
                  <div class='w-full lg:flex-1'>
                    <p class='font-bold mb-0 mt-5 mb-1'>Assistant</p>
                    <span class='block'>{!! the_sub_field('assistant') !!}</span>
                    <a href="mailto:{!! the_sub_field('assistant_email') !!}" title="Email for {!! the_sub_field('assistant') !!}" class='block py-1'>{!! the_sub_field('assistant_email') !!}</a>
                    <a href="tel:{!! the_sub_field('assistant_phone') !!}"  class='block py-1'>{!! the_sub_field('assistant_phone') !!}</a>
                  </div>
                  @endif
                </div>
                @endif
                @if(get_sub_field('home_address'))
                <div class='flex flex-wrap border-t-2 py-3'>
                  <div class='w-full lg:w-1/2'>
                    <p class='font-bold'>Home</p>
                    <address>{!! the_sub_field('home_address') !!}</address>
                  </div>
                  @if(get_sub_field('spouse_partner'))
                  <div class='w-full lg:w-1/2'>
                    <p class='m-0 font-bold mt-3'>Spouse / Partner</p>
                    <p class='m-0'>{!! the_sub_field('spouse_partner') !!}</p>
                  </div>
                  @endif
                </div>
                @endif
                @if(get_sub_field('bio'))
                <div class="flex flex-wrap border-t-2 pt-3">
                  <h3 class='font-bold mb-1 mt-2 text-2xl'>About {!! the_sub_field('name') !!}</h3>
                  {!! the_sub_field('bio') !!}
                </div>
                @endif
              </div>
            </li>
            @endwhile
          </ul>
          @endif
        </main>
      </div>
    </div>
  </section>

  <div class="modal opacity-0 pointer-events-none fixed w-full h-full flex items-center justify-center">
      <div class="modal-overlay absolute w-full h-full bg-black opacity-50"></div>

      <div class="modal-container bg-white w-11/12 lg:max-w-lg mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-close absolute cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
          <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
          </svg>
          <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6 relative">
          <!--Title-->
          <div class="modal-header flex justify-between items-center pb-3">
            <div class="modal-close cursor-pointer z-50">
              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
            </div>
          </div>

          <!--Body-->
          <div id='modal-body'>

          </div>
          <!-- End Modal Body -->
        </div>
        <!-- end Modal Content -->
      </div>
    </div>
@else
<div class="container">
  <div class='content flex-flex-wrap'>
    {!! get_the_password_form() !!}
  </div>
</div>
@endif

<script>
  var modal_open = false;

   var openmodal = document.querySelectorAll('.modal-open')
   for (var i = 0; i < openmodal.length; i++) {
     //For each Open Modal Command
     openmodal[i].addEventListener('click', function(event){
       const person_id = this.dataset.id;
       event.preventDefault();
       toggleModal(person_id);
     })
   }

   //Create the Overlay
   const overlay = document.querySelector('.modal-overlay')
   overlay.addEventListener('click', toggleModal)


   //Create the Close Button
   var closemodal = document.querySelectorAll('.modal-close')
   for (var i = 0; i < closemodal.length; i++) {
     closemodal[i].addEventListener('click', toggleModal)
   }

   //Create Keyboard Close Shortcut
   document.onkeydown = function(evt) {
     evt = evt || window.event
     var isEscape = false
     if ("key" in evt) {
     isEscape = (evt.key === "Escape" || evt.key === "Esc")
     } else {
     isEscape = (evt.keyCode === 27)
     }
     if (isEscape && document.body.classList.contains('modal-active')) {
     toggleModal()
     }
   };


   function toggleModal (name) {
     const body = document.querySelector('body')
     const modal = document.querySelector('.modal')
     const modal_body = document.querySelector('#modal-body')

     if(modal_open == false ) {
      const person_bio = document.querySelector('#'+name)
      console.log('Loading bio for: ' . person_bio)
      modal_body.innerHTML = person_bio.innerHTML
      modal_open = true;
    } else {
      //Modal is ALready Open. Ready to close it
      console.log('Removing bio')
      modal_body.innerHTML = '';
      modal_open = false;
    }



     modal.classList.toggle('opacity-0')
     modal.classList.toggle('pointer-events-none')
     body.classList.toggle('modal-active')
   }


 </script>
@endsection
