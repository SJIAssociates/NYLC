<div class='flex success-box w-full'>
    <div class='w-full p-5 lg:p-24 bg-white my-8'>
      <div class='flex flex-wrap'>
        <div class='box-content w-full lg:w-1/2 flex flex-wrap flex-col lg:pr-8 justify-center'>
          <h3 class='mb-5 text-2xl mb-0'>{!! $title !!}</h3>
          <div class=''>
            <p class='lg:text-lg xxl:text-2xl'>{!! $excerpt !!}</p>
          </div>
          <div>
            <a href="{!! $permalink !!}" class='btn bg-red text-white inline-block hover:no-underline'>Learn More</a><br>
          </div>
        </div>
        <div class='box-image   w-full lg:w-1/2'>
          <a href="{!! $permalink !!}"><img src="{!! $thumbnail !!}"></a>
        </div>
      </div>
    </div>
</div>
