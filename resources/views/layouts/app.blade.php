<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body  data-scroll-container @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document" data-scroll-section>
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    <div data-scroll-section>
      @include('partials.footer')
    </div>
    @php wp_footer() @endphp
  </body>
</html>
