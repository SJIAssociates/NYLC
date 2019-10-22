{{--
Name: Landmark Card
Post Type: Landmarks
Usage:
  Home template
  Landmark archive
  Explore NY
Variables:
  $title
  $image
  $excerpt
  $permalink
--}}
<div class='landmark-card'>
    <div class='bg-image' style="background: url( {!! $image !!} ); background-size:cover; background-position: center center;"></div>
    <div class='card w-full mt-32 lg:w-2/5 lg:my-24 lg:ml-32 p-5 xxl:px-20 xxl:py-16 xxl:my-48 mx-5'>
      <h3 class='text-3xl xxl:text-4xl'>{!! $title !!}</h3>
      <p>{!! $excerpt !!}</p>
      <a href='{!! $permalink !!}' class='btn block mb-6'>Watch the Video</a>
      <br>
      <a href="/explore-ny" class='archive-link hover:text-red hover:border-red'>Explore other NY Landmarks <i class="fas fa-chevron-right"></i></a>
    </div>
</div>
