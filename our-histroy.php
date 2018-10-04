<?php get_header(); /* Template Name: Our History */ ?>
<div class="our-history single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
        $au_oh_heading              = get_field('au_oh_heading');
        $au_oh_text                 = get_field('au_oh_text');
        $au_oh_image_url            = get_field('au_oh_image_url');
        $au_oh_image_description    = get_field('au_oh_image_description');

        $au_oh_lh_heading              = get_field('au_oh_lh_heading');
        $au_oh_lh_text                 = get_field('au_oh_lh_text');
        $au_oh_lh_image_url            = get_field('au_oh_lh_image_url');
        $au_oh_lh_image_description    = get_field('au_oh_lh_image_description');

  ?>

  <div class="container">
    <div class="img-wrapper">
      <img src="<?php echo $au_oh_image_url; ?>">
      <?php echo $au_oh_image_description; ?>
    </div>

    <h1><?php echo $au_oh_heading; ?></h1>
    <?php echo $au_oh_text; ?>
  </div>

  <div class="container" id="naturalhistory">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dude.jpg">
    <h1><?php echo $au_oh_lh_heading; ?></h1>

    <div class="text">
      <?php echo $au_oh_lh_text; ?>

      <div class="img-wrapper">
        <img src="<?php echo $au_oh_lh_image_url; ?>">
        <?php echo $au_oh_lh_image_description; ?>
      </div>

      <?php if( have_rows('au_oh_lh_persons') ): ?>
        <?php while( have_rows('au_oh_lh_persons') ): the_row(); ?>
          <h2><?php the_sub_field('au_oh_lh_person_name'); ?></h2>
          <h3><?php the_sub_field('au_oh_lh_person_dates'); ?></h3>
          <?php echo the_sub_field('au_oh_lh_person_text'); ?>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php if( have_rows('au_oh_dbn_listings') ): ?>
        <ul>
          <li>Charles Deam by the Numbers:</li>
          <?php while( have_rows('au_oh_dbn_listings') ): the_row(); ?>
            <li><?php the_sub_field('au_oh_dbn_listing'); ?></li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>

  <?php if( get_field('au_oh_gallery_images') ): ?>
    <div class="container">
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <?php if( have_rows('au_oh_gallery_images') ): ?>
            <?php while( have_rows('au_oh_gallery_images') ): the_row(); ?>
              <div class="item">
                <img src="<?php the_sub_field('au_oh_gallery_image_url'); ?>">
                <?php the_sub_field('au_oh_image_text'); ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>