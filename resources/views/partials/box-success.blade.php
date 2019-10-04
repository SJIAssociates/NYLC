<div class='flex success-box w-full'>
    <div class='w-full p-5 md:p-24 bg-white my-8'>
      <div class='flex flex-wrap'>
        <div class='box-content w-full md:w-1/2 flex flex-wrap flex-col md:pr-8'>
          <h3 class='mb-5 text-2xl mb-0'>{!! $title !!}</h3>
          <div class='flex-grow'>
            <p>{!! $excerpt !!}</p>
          </div>
          <div>
            <a href="{!! $permalink !!}" class='btn bg-red text-white inline-block hover:no-underline'>Read The Story</a><br>
          </div>
        </div>
        <div class='box-image w-full md:w-1/2'>
          <img src="{!! $thumbnail !!}">
        </div>
      </div>
    </div>

</div>
