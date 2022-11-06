<div class="header-mobile-bar d-flex d-md-none" id="mobile-header">
  <div>
    <div class="hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div>
    <div class="logo-mobile-header">
    </div>
  </div>
  <div>
    <div class="btn-act-now">
      <a href="{{get_permalink( get_page_by_path( 'statement' ) ) }}" class="act-cta">Act now</a>
    </div>
  </div>
</div>
<header class="banner" id="header">
  <div class="container">
    <div class="header-wrap">
      <div class="menu-left">
        <div class="logo-mobile d-flex d-md-none">
          <a href="{{home_url()}}">

          </a>
          <div class="close-btn">
            <a href="#"><img src="@asset('images/close.svg')" alt=""></a>
          </div>
        </div>
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
      <div class="center-logo">
        <a href="{{home_url()}}" class="{{ is_front_page() ? 'd-none' : '' }}">
        </a>
      </div>
      <div class="right-menu">
        <nav class="nav-primary">
          {!! wp_nav_menu(['menu' => 'right', 'menu_class' => 'nav']) !!}
        </nav>
      </div>
    </div>
  </div>
</header>
