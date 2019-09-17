<div class='flex success-box w-full'>
    <div class='w-full p-5 md:p-24 bg-blue-grey my-8'>
      <div class='flex flex-wrap'>
        <div class='box-content w-full md:w-1/2 flex flex-wrap flex-col md:pr-8'>
          <h3 class='mb-10'>{!! get_the_title() !!}</h3>
          <div>
            <a href="{{ get_permalink() }}" class='btn bg-red text-white inline-block mb-12 hover:no-underline'>Read The Story</a><br>
          </div>
        </div>
        <div class='box-image w-full md:w-1/2'>
          <img src="{!! get_the_post_thumbnail_url() !!}">
        </div>
      </div>
    </div>
</div>
