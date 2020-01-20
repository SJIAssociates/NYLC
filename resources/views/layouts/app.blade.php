<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <div class="sitewrapper">
      @php do_action('get_header') @endphp
      @include('partials.header')
      <div class="wrap" role="document">

          @yield('content')

      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @php wp_footer() @endphp
    </div>
  </div>
    <section id="mobile-nav" class="lg:hidden">
      <div class="border-b-2 border-grey">
        <form role="search" method="get" class="search-form flex" action="{{ esc_url( home_url( '/' ) ) }}">
          <label class='w-3/4'>
            <span class="screen-reader-text">{{ _x( 'Search for:', 'label' ) }}</span>
            <input type="search" class="search-field p-3 w-full" placeholder="{!! esc_attr_x( 'Search &hellip;', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
          </label>
          <button type="submit" class="search-submit" value="{{ esc_attr_x( 'Search ', 'submit button' ) }}" />
            <i class='fas fa-search'></i>
          </button>
        </form>
      </div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </section>
  </body>
</html>
