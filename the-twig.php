<?php get_header(); /* Template Name: The Twig */ ?>
<div class="the-twig single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
        $bulletin_board_twig_text                         = get_field('bulletin_board_twig_text');
        $bulletin_board_twig_article_includes_body_text   = get_field('bulletin_board_twig_article_includes_body_text');
        $bulletin_board_twig_featured_image_url           = get_field('bulletin_board_twig_featured_image_url');

        $bb_twig_thumbnails_image_url_one   = get_field('bb_twig_thumbnails_image_url_one');
        $bb_twig_thumbnails_image_url_two   = get_field('bb_twig_thumbnails_image_url_two');
        $bb_twig_thumbnails_image_url_three = get_field('bb_twig_thumbnails_image_url_three');
        $bb_twig_thumbnails_image_url_four  = get_field('bb_twig_thumbnails_image_url_four');

        $bb_twig_pi_heading   = get_field('bb_twig_pi_heading');
        $bb_twig_pi_text   = get_field('bb_twig_pi_text');
        $bb_twig_pi_image   = get_field('bb_twig_pi_image');
  ?>

  <div class="container">
    <h1>The Twig</h1>
  </div>

  <div class="container">
    <div>
      <?php echo $bulletin_board_twig_text; ?>

      <div class="article-wrapper">
        <div><img src="<?php echo $bulletin_board_twig_featured_image_url; ?>"></div>

        <div>
          <?php if( have_rows('bulletin_board_twig_article_includes') ): ?>
            <ul>
              <li>Articles include:</li>
            <?php while( have_rows('bulletin_board_twig_article_includes') ): the_row(); ?>
              <li><?php the_sub_field('bulletin_board_twig_includes_list'); ?></li>
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          <?php echo $bulletin_board_twig_article_includes_body_text; ?>
        </div>
      </div>

      <div class="thumbs-wrapper">
        <img src="<?php echo $bb_twig_thumbnails_image_url_one; ?>">
        <img src="<?php echo $bb_twig_thumbnails_image_url_two; ?>">
        <img src="<?php echo $bb_twig_thumbnails_image_url_three; ?>">
        <img src="<?php echo $bb_twig_thumbnails_image_url_four; ?>">
      </div>

      <div class="btns-wrapper">
        <?php if( have_rows('bb_twig_buttons') ): ?>
          <?php while( have_rows('bb_twig_buttons') ): the_row(); ?>
            <a href="<?php the_sub_field('bb_twig_buttons_button_url'); ?>" class="btn"><?php the_sub_field('bb_twig_buttons_button_text'); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="container">
    <h1><?php echo $bb_twig_pi_heading; ?></h1>
    <div class="text">
      <div>
        <?php echo $bb_twig_pi_text; ?>

        <ul>
          <?php if( have_rows('bb_twig_pi_links') ): ?>
            <?php while( have_rows('bb_twig_pi_links') ): the_row(); ?>
              <li><a href="<?php the_sub_field('bb_twig_pi_past_issue_url'); ?>"><?php the_sub_field('bb_twig_pi_past_issue_text'); ?></a></li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>

      <div>
        <img src="<?php echo $bb_twig_pi_image; ?>">
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>