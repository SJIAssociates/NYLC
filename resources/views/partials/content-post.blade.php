
  <div class='news-card w-full bg-white mb-5 lg:mb-10 items-stretch relative p-12 lg:p-16 xxl:p-20'>
    <div class='flex flex-wrap'>
        <div class='box-content w-full md:w-1/2 flex flex-wrap flex-col md:pr-8'>
          <h3 class='mb-5 text-2xl mb-0 xxl:text-3xl'>
            <a href="{!! get_the_permalink(); !!}" class='text-black hover:text-red'>{!! the_title();  !!}</a>
          </h3>
          <span class='categories block mb-3'>
          @php

            $categories = get_the_category();
            foreach( $categories as $category) {
                $name = $category->name;
                $category_link = get_category_link( $category->term_id );

                echo "<a href='$category_link'><span class=''" . esc_attr( $name) . "''>" . $name . "</span></a><br />";
            }
            @endphp
          </span>
          <div class='flex-grow'>
          {!! the_excerpt(); !!}
        </div>
        </div>
        <div class='box-image w-full md:w-1/2'>
          <a href="{!! get_the_permalink(); !!}" title="{!! the_title();  !!}">{!! the_post_thumbnail('news_thumb') !!}</a>
        </div>
    </div>
</div>
