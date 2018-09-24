<?php get_header();?>
<div class="news-single single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
        $bb_news_single_hero_image_url    = get_field('bb_news_single_hero_image_url');
        $bb_news_single_hero_heading      = get_field('bb_news_single_hero_heading');
        $bb_news_single_hero_subheading   = get_field('bb_news_single_hero_subheading');
        $bb_news_single_hero_text         = get_field('bb_news_single_hero_text');
  ?>

  <div class="container">
    <img class="hero" src="<?php echo $bb_news_single_hero_image_url; ?>">

    <h1><?php echo $bb_news_single_hero_heading; ?></h1>
    <h4><?php echo $bb_news_single_hero_subheading; ?></h4>
    <h4><?php echo $bb_news_single_hero_text; ?></h4>

    <?php if( have_rows('bb_news_text_sections') ): ?>
      <?php while( have_rows('bb_news_text_sections') ): the_row(); ?>
        <div class="item">
          <h2><?php the_sub_field('bb_news_text_section_heading'); ?></h2>
          <h3><?php the_sub_field('bb_news_text_section_subheading'); ?></h3>
          <?php the_sub_field('bb_news_text_sections_text'); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="container">
    <div class="carousel-wrap">
      <div class="owl-carousel">
        <?php if( have_rows('bb_news_gallery_images') ): ?>
          <?php while( have_rows('bb_news_gallery_images') ): the_row(); ?>
            <div class="item">
              <img src="<?php the_sub_field('bb_news_gallery_image_url'); ?>">
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>