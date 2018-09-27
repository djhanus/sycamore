<?php get_header(); ?>
<div class="explore-individual single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
        $explore_single_body_text     = get_field('explore_single_body_text');
        $explore_single_directions_heading        = get_field('explore_single_directions_heading');
        $explore_single_infos_featured_image        = get_field('explore_single_infos_featured_image');
        $explore_single_location_map = get_field('explore_single_location_map');
  ?>

  <div class="container">
    <div>
      <h1><?php the_title(); ?></h1>
      <?php echo $explore_single_body_text; ?>

      <h1> <?php echo $explore_single_directions_heading; ?></h1>
      <?php if( have_rows('explore_single_directions_directions') ): ?>
        <ul>
        <?php while( have_rows('explore_single_directions_directions') ): the_row(); ?>
          <li><?php the_sub_field('explore_single_directions_step'); ?></li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>

    <div>
      <img src="<?php echo $explore_single_infos_featured_image; ?>">

      <div class="text">
        <?php if( have_rows('explore_single_infos') ): ?>
          <ul>
          <?php while( have_rows('explore_single_infos') ): the_row(); ?>
            <li><strong><?php the_sub_field('explore_single_infos_title'); ?>:</strong> <?php the_sub_field('explore_single_infos_info'); ?></li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="container">
    <?php echo $explore_single_location_map; ?>
  </div>

  <div class="container">
    <div class="carousel-wrap">
      <div class="owl-carousel">
        <?php if( have_rows('explore_single_gallery_images') ): ?>
          <?php while( have_rows('explore_single_gallery_images') ): the_row(); ?>
            <div class="item">
              <img src="<?php the_sub_field('explore_single_gallery_image_url'); ?>">
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