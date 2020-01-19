<header class="banner bg-primary" aria-label="Main Navigation"  >
  <div class="px-8 mx-auto">
    <div class='flex items-start'>
      <div class='w-full lg:w-3/4 flex row items-center'>
          <a class="brand" href="{{ home_url('/') }}" label="Logo for the NYLC. Link to the Homepage">
            <img src="{!! $logo['url'] !!}" alt="Logo for the New York Landmark Conservancy">
          </a>
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
      <div class='w-full lg:w-1/4 lg:block hidden text-right'>
        {!! get_search_form() !!}
        <a href="/join" class='uppercase text-white text-sm font-bold hover:bg-white hover:text-primary py-4 px-5'>Join Us</a>
        <a href="/donate" class='btn btn-donate hover:bg-primary hover:text-white border-2 border-primary hover:border-white'>Donate</a>
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
