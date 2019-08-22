<header class="banner bg-red">
  <div class="px-8 lg:w-11/12 mx-auto">
    <div class='flex items-start'>
      <div class='w-full sm:w-3/4 flex row items-center'>
          <a class="brand" href="{{ home_url('/') }}">
            <img src="@asset('images/logo.png')">
          </a>
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
      <div class='w-full sm:w-1/4 text-right'>
        {!! get_search_form() !!}
        <a href="#" class='uppercase text-white text-sm font-bold'>Join Us</a>
        <a href="#" class='btn btn-donate'>Donate</a>
      </div>
    </div>
  </div>
</header>
