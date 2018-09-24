<?php get_header(); /* Template Name: Volunteer */ ?>
<div class="volunteer single-page">
  <div class="container">
    <?php breadcrumbs(); ?>

    <?php while ( have_posts() ): the_post();
        $volunteer_hero_header_text     = get_field('volunteer_hero_header_text');
        $volunteer_hero__subtext        = get_field('volunteer_hero__subtext');
        $volunteer_hero_image_url       = get_field('volunteer_hero_image_url');

        $volunteer_events_heading       = get_field('volunteer_events_heading');
        $volunteer_events_text          = get_field('volunteer_events_text');
        $volunteer_events_button_text   = get_field('volunteer_events_button_text');
        $volunteer_events_button_url    = get_field('volunteer_events_button_url');

        $volunteer_contact_image        = get_field('volunteer_contact_image');
        $volunteer_contact_heading      = get_field('volunteer_contact_heading');
        $volunteer_contact_text         = get_field('volunteer_contact_text');

        $volunteer_so_heading           = get_field('volunteer_so_heading');
        $volunteer_so_text              = get_field('volunteer_so_text');
        $volunteer_so_button_text       = get_field('volunteer_so_button_text');
        $volunteer_so_button_url        = get_field('volunteer_so_button_url');
    ?>

    <div class="hero-wrapper">
      <div class="hero">
        <div style="background: url('<?php echo $volunteer_hero_image_url; ?>');">
        </div>

        <div>
          <h1><?php echo $volunteer_hero_header_text; ?></h1>
          <?php echo $volunteer_hero__subtext; ?>
        </div>
      </div>
      <div class="hero-footer"></div>
    </div>

    <div class="row one">
      <div class="container">
        <div>
          <h1><?php echo $volunteer_events_heading; ?></h1>
          <?php echo $volunteer_events_text; ?>

          <?php include('mini-events-cal.php'); ?>

          <a href="<?php echo $volunteer_events_button_url; ?>" class="btn"><?php echo $volunteer_events_button_text; ?></a>

          <h1>VOLUNTEER OPPORTUNITIES</h1>

           <?php if( have_rows('volunteer_opportunities') ): ?>
            <ul>
            <?php while( have_rows('volunteer_opportunities') ): the_row(); ?>
              <li><strong><?php the_sub_field('volunteer_opportunities_opportunity_name'); ?>:</strong> <?php the_sub_field('volunteer_opportunities_opportunity_opportunity_text'); ?></li>
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>

        <div>
          <div>
            <div class="text">
              <h1><?php echo $volunteer_contact_heading; ?></h1>
              <?php echo $volunteer_contact_text; ?>
              <img src="<?php echo $volunteer_contact_image; ?>">
            </div>

            <h1><?php echo $volunteer_so_heading; ?></h1>
             <?php echo $volunteer_so_text; ?>
            <a href="<?php echo $volunteer_so_button_url; ?>" class="btn"> <?php echo $volunteer_so_button_text; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>