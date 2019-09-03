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
      <h2>Menu</h2>
    </section>
  </body>
</html>
