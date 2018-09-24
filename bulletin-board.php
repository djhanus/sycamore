<?php get_header(); /* Template Name: Bulletin Board */ ?>
<div class="bulletin-board single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <div class="container">
    <h1>BULLETIN BOARD</h1>
  </div>

  <div class="container">
    <div class="left">
      <div>
        <h1>EVENTS CALENDAR</h1>

        <div>
          <p>Upcoming Events:</p>

          <?php include('mini-events-cal.php'); ?>
          <a href="#" class="btn">View Full Calendar</a>
        </div>
      </div>

      <div>
        <?php
          $args = array(
            'post_type'       => 'post',
            'order'           => 'ASC',
            'posts_per_page'  => '1',
            'category_name'   => 'event',
            'post_status'     => 'publish',
            'meta_query'      => array(
              array(
                'key'       => 'bb_events_featured',
                'value'     => true,
                'compare'   => 'LIKE'
              )
            )
          );
          $the_query            = new WP_Query( $args );
        ?>

        <h1>FEATURED</h1>
        <div>
          <?php if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            $bb_events_featured_image_url = get_field('bb_events_featured_image_url');
          ?>
          <img src="<?php echo $bb_events_featured_image_url; ?>">
          <h1><?php the_title(); ?></h1>
          <?php the_excerpt(); ?>

          <a href="<?php echo get_permalink(); ?>" class="btn">Read More</a>
          <?php endwhile; else: ?>
          <?php endif; ?>
        </div>
      </div>

      <div>
        <h1>The Twig</h1>
        <div>
          <?php while ( have_posts() ): the_post();
            $post_id = 61;
            $bulletin_board_twig_featured_image_url           = get_field('bulletin_board_twig_featured_image_url', $post_id);
          ?>
          <img src="<?php echo $bulletin_board_twig_featured_image_url; ?>">

          <div class="text">
            <p>The Twig is our print newsletter that comes out three times a year. Members receive The Twig free in the mail, and anyone is welcome to read it online. Learn about conservation news, outdoors events, environmental education stories, and much more.</p>

            <a href="<?php echo get_home_url(); ?>/bulletin-board/the-twig/" class="btn">Read More</a>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

    <div class="right">
      <div>
        <h1>Latest News</h1>

        <?php
          $args = array(
            'post_type'       => 'post',
            'order'           => 'ASC',
            'posts_per_page'  => '4',
            'category_name'   => 'news',
            'post_status'     => 'publish'
          );
          $the_query            = new WP_Query( $args );
        ?>
        <div class="items-wrapper">
          <?php if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

          ?>
          <div class="item">
            <?php if ( has_post_thumbnail() ) { ?>
                <?php the_post_thumbnail('thumbnail', array( 'class' => 'featured-image' )); ?>
              <?php  } else {  ?>
                <img src="https://placeholder.pics/svg/150x150" class="featured-image">
            <?php } ?>

            <div class="text">
              <h1><?php the_title(); ?></h1>
              <?php the_excerpt()?>
              <a href="<?php echo get_permalink(); ?>">Continue reading ></a>
            </div>
          </div>
          <?php endwhile; else: ?>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>

      <div>
        <?php while ( have_posts() ): the_post();
            $bulletin_board_heading         = get_field('bulletin_board_heading');
            $bulletin_board_text            = get_field('bulletin_board_text');
            $bulletin_board_button_text     = get_field('bulletin_board_button_text');
            $bulletin_board_button_url      = get_field('bulletin_board_button_url');
          ?>
        <h1><?php echo $bulletin_board_heading; ?></h1>
        <div>

          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/donate-thumbnail.jpg">

          <div class="text">
            <?php echo $bulletin_board_text; ?>
            <a href="<?php echo $bulletin_board_button_url; ?>" class="btn"><?php echo $bulletin_board_button_text; ?>w</a>
          </div>

        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div>
      <h1>FOLLOW ALONG</h1>

      <div class="wrapper">
        <?php while ( have_posts() ): the_post();
          $bb_socials_facebook          = get_field('bb_socials_facebook');
          $bb_socials_facebook_url      = get_field('bb_socials_facebook_url');

          $bb_socials_instagram         = get_field('bb_socials_instagram');
          $bb_socials_instagram_url     = get_field('bb_socials_instagram_url');

          $bb_socials_twitter           = get_field('bb_socials_twitter');
          $bb_socials_twitter_url       = get_field('bb_socials_twitter_url');
        ?>
        <div class="text">
          <p>Follow us for updates, news, events, photos, and more!</p>
          <ul>
            <li>
              <a href="<?php echo $bb_socials_facebook_url; ?>">
                <span class="facebook"></span>
                <span><?php echo $bb_socials_facebook; ?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo $bb_socials_instagram_url; ?>">
                <span class="instagram"></span>
                <span><?php echo $bb_socials_instagram; ?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo $bb_socials_twitter_url; ?>">
                <span class="twitter"></span>
                <span><?php echo $bb_socials_twitter; ?></span>
              </a>
            </li>
          </ul>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>

        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-placeholder-350.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-placeholder-350.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-placeholder-350.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-placeholder-350.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-placeholder-350.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-placeholder-350.jpg">
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>