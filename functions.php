<?php
function enqueue_parent_styles() {
  wp_register_style('slt-style',  get_stylesheet_directory_uri() .'/style.css', array(), null, 'all');
  wp_register_style('slt-mobile-style',  get_stylesheet_directory_uri() .'/mobile.css', array(), null, 'all');
  wp_register_style('carousel-style',  get_stylesheet_directory_uri() .'/css/carousel.min.css', array(), null, 'all');
  wp_register_style('google-fonts-style', 'https://fonts.googleapis.com/css?family=Khand:400,500,600|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i', array(), null, 'all');
  wp_enqueue_style('slt-style');
  wp_enqueue_style('carousel-style');
  wp_enqueue_style('google-fonts-style');
  wp_enqueue_script('tween-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js', false, null, true);
  wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
  wp_script_add_data('jquery-script', array( 'integrity', 'crossorigin' ) , array( 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=', 'anonymous' ) );
  wp_enqueue_script('slt-scripts', get_stylesheet_directory_uri() .'/js/scripts.js', false, null, true);
  wp_enqueue_script('carousel-script', get_stylesheet_directory_uri() .'/js/carousel.min.js', false, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function my_acf_init() {
  acf_update_setting('google_api_key', '');
}
add_action('acf/init', 'my_acf_init');

add_theme_support('post-thumbnails');

function slt_post_types() {
  register_post_type( 'preserves',
    array(
      'labels' => array(
        'name' => __( 'Preserves' ),
        'singular_name' => __('Preserve')
      ),
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'preserves'),
    )
  );
}
add_action('init', 'slt_post_types');

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __('header'),
      'footer-social-menu' => __('Footer Social Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}
add_action('init', 'register_menus');

function breadcrumbs() {
  echo '<ul class="breadcrumbs">';
    if (!is_home()) {
      echo '<li><a href="';
      echo get_option('home');
      echo '">';
      echo 'Home';
      echo "</a>&nbsp;&nbsp;/&nbsp;&nbsp;</li>";
    if ( is_singular( 'preserves' ) ) {
      echo '<li><a href="';
      echo get_option('home');
      echo '/explore';
      echo '">';
      echo 'Explore';
      echo "</a>&nbsp;&nbsp;/&nbsp;&nbsp;</li>";
    }
    if (is_single()) {
      echo '<li>';
      the_category( ', ' );
      echo '&nbsp;&nbsp;/&nbsp;&nbsp;';
      if (is_single()) {
        echo "</li><li>";
        echo ucwords(the_title());
        echo '</li>';
      }
    } elseif (is_page()) {
      echo '<li>';
      echo the_title();
      echo '</li>';
    }
  }
  elseif (is_tag()) {single_tag_title();}
  elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
  elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
  elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
  echo '</ul>';
}
?>