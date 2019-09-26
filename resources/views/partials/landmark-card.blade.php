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
    <div class='card w-2/5 my-24 ml-32 p-10 xxl:px-20 xxl:py-16 xxl:my-48'>
      <h3 class='text-3xl xxl:text-4xl'>{!! $title !!}</h3>
      <p>{!! $excerpt !!}</p>
      <a href='{!! $permalink !!}' class='btn block mb-6'>Watch the Video</a>
      <br>
      <a ref="/landmarks" class='archive-link'>Explore other NY Landmarks <i class="fas fa-chevron-right"></i></a>
    </div>
</div>
