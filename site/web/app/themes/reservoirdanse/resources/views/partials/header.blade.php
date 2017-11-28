<header class="banner">
  <div class="wrapper">
    <a class="brand" href="{{ home_url('/') }}"><i class="fa fa-home"></i> {{ get_bloginfo('name', 'display') }}</a>
    {{--  <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>  --}}

    <ul class="social-menu">
      <li class="social-item"><a class="social-link" href="#"><i class="fa fa-facebook"></i></a></li>
      <li class="social-item"><a class="social-link" href="#"><i class="fa fa-twitter"></i></a></li>
    </ul>

  </div>
</header>
