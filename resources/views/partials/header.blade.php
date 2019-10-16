<header class="banner bg-primary">
  <div class="px-8 mx-auto">
    <div class='flex items-start'>
      <div class='w-full lg:w-3/4 flex row items-center'>
          <a class="brand" href="{{ home_url('/') }}">
            <img src="{!! $logo['url'] !!}">
          </a>
        <nav class="hidden lg:block nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
      <div class='w-full lg:w-1/4 lg:block hidden text-right'>
        {!! get_search_form() !!}
        <a href="/join" class='uppercase text-white text-sm font-bold'>Join Us</a>
        <a href="/donate" class='btn btn-donate'>Donate</a>
      </div>
      <button id='mobile-menu' class='lg:hidden menu-toggle' type='button'>
        <span class='bar top'></span>
        <span class='bar middle'></span>
        <span class='bar bottom'></span>
        <span class='menu-title text-white'>Menu</span>
      </button>
    </div>
  </div>
</header>
