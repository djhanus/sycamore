<?php get_header(); /* Template Name: About us */ ?>
<div class="about-us single-page">
  <div class="container">
    <?php breadcrumbs(); ?>

    <?php while ( have_posts() ): the_post();
          $about_hero_header_text     = get_field('about_hero_header_text');
          $about_hero_subtext         = get_field('about_hero_subtext');
          $about_hero_image_url       = get_field('about_hero_image_url');

          $about_us_mv_heading        = get_field('about_us_mv_heading');
          $about_us_mv_text           = get_field('about_us_mv_text');

          $about_us_wwd_heading       = get_field('about_us_wwd_heading');
          $about_us_wwd_text          = get_field('about_us_wwd_text');

          $about_us_staff_heading     = get_field('about_us_staff_heading');
          $about_us_staff_text        = get_field('about_us_staff_text');

          $about_us_board_dir_heading     = get_field('about_us_board_dir_heading');
          $about_us_board_dir_text        = get_field('about_us_board_dir_text');

          $about_us_ab_heading     = get_field('about_us_ab_heading');
          $about_us_ab_text        = get_field('about_us_ab_text');

    ?>

    <div class="hero-wrapper">
      <div class="hero">
        <div>
          <h1><?php echo $about_hero_header_text; ?></h1>
          <?php echo $about_hero_subtext; ?>
        </div>

        <div style="background: url('<?php echo $about_hero_image_url; ?>');">
        </div>
      </div>
      <div class="hero-footer"></div>
    </div>

    <div class="row one">
      <div class="container">
        <div class="text">
          <div>
            <h1><?php echo $about_us_mv_heading; ?></h1>
            <?php echo $about_us_mv_text; ?>
          </div>

          <div>
            <h1><?php echo $about_us_wwd_heading; ?></h1>
            <?php echo $about_us_wwd_text; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="image-cover-divider"></div>

    <div class="row two">
      <div class="container">
        <h1 id="staff"><?php echo  $about_us_staff_heading; ?></h1>
        <?php echo  $about_us_staff_text; ?>

        <div class="persons-wrapper">
          <?php if( have_rows('about_us_staff_persons') ): ?>
            <?php while( have_rows('about_us_staff_persons') ): the_row(); ?>
              <div class="person">
                <img src="<?php the_sub_field('about_us_staff_person_image_url'); ?>">
                <h1><?php the_sub_field('about_us_staff_person_name'); ?></h1>
                <?php the_sub_field('about_us_staff_person_bio'); ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="container">
        <h1 id="board"><?php echo  $about_us_board_dir_heading; ?></h1>
        <?php echo  $about_us_board_dir_text; ?>

        <div class="persons-wrapper">
          <?php if( have_rows('about_us_board_dir_persons') ): ?>
            <?php while( have_rows('about_us_board_dir_persons') ): the_row(); ?>
              <div class="person">
                <img src="<?php the_sub_field('about_us_board_dir_person_image_url'); ?>">
                <h1><?php the_sub_field('about_us_board_dir_person_name'); ?></h1>
                <?php the_sub_field('about_us_board_dir_person_bio'); ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="container">
        <h1><?php echo $about_us_ab_heading; ?></h1>
        <?php echo $about_us_ab_text; ?>

        <div class="text">
          <?php if( have_rows('about_us_ab_persons') ): ?>
            <ul>
            <?php while( have_rows('about_us_ab_persons') ): the_row(); ?>
              <li>
                <span><?php the_sub_field('about_us_ab_persons_name'); ?></span>
                <span><?php the_sub_field('about_us_ab_persons_title'); ?></span>
              </li>
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <?php include('learn-indiana-divider.php');?>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>