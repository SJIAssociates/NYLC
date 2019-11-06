
  <div class='news-card w-full bg-white mb-5 lg:mb-10 items-stretch relative lg:p-12 lg:p-16 xxl:p-20'>
    <div class='flex flex-wrap'>
        <div class='box-content w-full md:w-1/2 flex py-3 px-6 lg:px-0 flex-wrap flex-col lg:pr-8'>
          <h3 class='text-2xl mb-1 xxl:text-3xl'>
            <a href="{!! get_the_permalink(); !!}" class='text-black hover:text-red'>{!! the_title();  !!}</a>
          </h3>
          <time class="updated font-bold mb-5" datetime="{{ get_post_time('c', true) }}"><i class="fas fa-clock"></i> {{  get_the_date('F Y') }}</time>
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
          <a href="{!! get_the_permalink(); !!}" title="{!! the_title();  !!}">
            @if(get_the_post_thumbnail_url() )
              {!! the_post_thumbnail('news_thumb') !!}
            @else
              <img src="@asset('images/placeholder-nylandmarks.png')" alt="{!! the_title();  !!}" />
            @endif
          </a>
        </div>
    </div>
</div>
