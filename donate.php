<?php get_header(); /* Template Name: Donate */ ?>
<div class="donate single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
        $donate_heading_one     = get_field('donate_heading_one');
        $donate_heading_two     = get_field('donate_heading_two');
        $donate_heading_three   = get_field('donate_heading_three');
        $donate_text            = get_field('donate_text');
        $donate_form            = get_field('donate_form');
        $donate_feature_image   = get_field('donate_feature_image');
  ?>

  <div class="container">
    <div>
      <h1><?php echo $donate_heading_one; ?></h1>
      <h2><?php echo $donate_heading_two; ?></h2>
      <h3><?php echo $donate_heading_three; ?></h3>

      <div class="text">
        <?php echo $donate_text; ?>

        <?php if( have_rows('donate_list_items') ): ?>
          <ul>
            <?php while( have_rows('donate_list_items') ): the_row(); ?>
              <li><?php the_sub_field('donate_list_items_item'); ?></li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>

    <div>
      <img src="<?php echo $donate_feature_image; ?>">
    </div>
  </div>
  <div class="container"><?php echo $donate_form; ?></div>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>
