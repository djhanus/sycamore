<?php get_header(); /* Template Name: Impact Reports */ ?>
<div class="impact-reports single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
          $impact_report_year                 = get_field('impact_report_year');
          $impact_report_featured_image_url   = get_field('impact_report_featured_image_url');
          $impact_report_text                 = get_field('impact_report_text');

          $give_ir_thumbnails_image_url_one   = get_field('give_ir_thumbnails_image_url_one');
          $give_ir_thumbnails_image_url_two   = get_field('give_ir_thumbnails_image_url_two');
          $give_ir_thumbnails_image_url_three = get_field('give_ir_thumbnails_image_url_three');
          $give_ir_thumbnails_image_url_four  = get_field('give_ir_thumbnails_image_url_four');
    ?>

  <div class="container">
    <h1>ANNUAL IMPACT REPORTS</h1>
  </div>

  <div class="container">
    <div>
      <h1><?php echo $impact_report_year; ?> Impact Report</h1>
      <div class="text">
        <img src="<?php echo $impact_report_featured_image_url; ?>">
        <?php echo $impact_report_text; ?>
      </div>

      <div class="thumbs-wrapper">
        <img src="<?php echo $give_ir_thumbnails_image_url_one; ?>">
        <img src="<?php echo $give_ir_thumbnails_image_url_two; ?>">
        <img src="<?php echo $give_ir_thumbnails_image_url_three; ?>">
        <img src="<?php echo $give_ir_thumbnails_image_url_four; ?>">
      </div>

      <div class="btns-wrapper">
        <?php if( have_rows('give_ir_buttons') ): ?>
          <?php while( have_rows('give_ir_buttons') ): the_row(); ?>
            <a href="<?php the_sub_field('give_ir_buttons_button_url'); ?>" class="btn"><?php the_sub_field('give_ir_buttons_button_text'); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div>
      <h1>PAST REPORTS</h1>
      <div>
        <div>
          <ul>
            <?php if( have_rows('give_ir_past_report') ): ?>
              <?php while( have_rows('give_ir_past_report') ): the_row(); ?>
                <li>
                  <span><?php the_sub_field('give_ir_past_report_year'); ?></span>
                  <?php if( get_sub_field('give_ir_past_report_annual_report_link_url') ): ?>
                    <a href="<?php the_sub_field('give_ir_past_report_annual_report_link_url'); ?>">Annual Report</a>
                  <?php endif; ?>

                  <?php if( get_sub_field('give_ir_past_report_donors_link_url') ): ?>
                    <a href="<?php the_sub_field('give_ir_past_report_donors_link_url'); ?>">Donors</a>
                  <?php endif; ?>
               </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>

        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flower-indiana.svg">
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>