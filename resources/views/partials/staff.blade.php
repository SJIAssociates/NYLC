
<div class='flex p-5 w-full'>
  <div class='staff-pic w-full sm:w-1/4 sm:pr-8'>
    @if( $image === false )
      <img src="@asset('images/profile-placeholder.jpg')" alt="Picture of {!! $name !!}"/>
    @else
      <img src="{!! $image['url'] !!}" alt="Picture of {!! $name !!}"/>
    @endif
  </div>
  <div class='staff-bio w-full sm:w-3/4'>
    <h3 class='pt-2 text-4xl text-black text-bold'>{!! $name !!}</h3>
    <span class='uppercase text-xl text-bold'>{!! $title !!}</span>
    <a href="mailto:{!! $email !!}" class='block black'>{!! $email !!}</a>
    <p>{!! $description !!}</p>
  </div>
</div>
