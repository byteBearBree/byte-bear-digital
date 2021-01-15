<?/**
 * Summary.
 *
 * Description.
 *
 * @since Version 3 digits
 */
$facebook = get_field('facebook');
$twitter = get_field('twitter');
$instagram = get_field('instagram');
$github = get_field('github');
 ?>

<header class="banner">
  <div class="row">
    <div class="mr-auto d-flex">
      <a class="brand" href="{{ home_url('/') }}"> <img src="@asset('images/mini-logo.png')" alt="Byte Bear Blogs Home" class="mini-logo">
      </a>

      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav justify-content-center']) !!}
        @endif
      </nav>
    </div>
    <nav class="nav social-media-bar ml-auto">
      @include('partials.social-media')
  </nav>
  </div>
  <!-- end of banner-nav-->
  <div class="container">
    <div class="brand-image">
      <img src="@asset('images/byte_bear_logo.png')" alt="Byte Bear Blogs" class="site-logo">
    </div>
  </div>

</header>
