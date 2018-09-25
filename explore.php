<?php get_header(); /* Template Name: Explore */ ?>
<div class="explore single-page">
  <div class="container">
    <?php breadcrumbs(); ?>

    <?php while ( have_posts() ): the_post();
          $exploreHeroHeader       = get_field('explore_hero_header_text');
          $exploreHeroSubtext      = get_field('explore_hero_subtext');
          $exploreHeroImageURL     = get_field('explore_hero_image_url');

          $exploreProtectText      = get_field('explore_protect_land_text');

          $exploreUpcomingText     = get_field('explore_upcoming_events_text');
          $exploreUpcomingBtnText  = get_field('explore_upcoming_events_button_text');
          $exploreUpcomingBtnURL   = get_field('explore_upcoming_events_button_url');

          $exploreVolOppsText     = get_field('explore_vol_opp_text');
          $exploreVolOppsBtnText  = get_field('explore_vol_opp_button_text');
          $exploreVolOppsBtnURL   = get_field('explore_vol_opp_button_url');
    ?>

    <div class="hero-wrapper">
      <div class="hero">
        <div>
          <h1><?php echo $exploreHeroHeader; ?></h1>
          <?php echo $exploreHeroSubtext; ?>
        </div>

        <div style="background: url('<?php echo $exploreHeroImageURL; ?>');">
        </div>
      </div>

      <div class="hero-footer">
        <div class="container">
          <div class="text">
            <h1>VISITATION RULES AND TIPS</h1>

            <?php if( have_rows('rules_tips_list') ): ?>
            <ul>
              <?php while ( have_rows('rules_tips_list') ) : the_row(); ?>
              <li><?php the_sub_field('rule_tip'); ?></li>
              <?php endwhile; ?>
            </ul>
            <?php else : endif; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="row one">
      <h1>DIRECTORY</h1>

      <div class="directory-wrapper">
        <?php if( have_rows('explore_directory') ): ?>
          <?php while( have_rows('explore_directory') ): the_row(); ?>
            <ul>
              <li><?php the_sub_field('explore_directory_county_name'); ?></li>
              <?php if( have_rows('explore_directory_listings') ): ?>
                <?php while( have_rows('explore_directory_listings') ): the_row();?>
                  <li><a href="<?php the_sub_field('explore_directory_county_listing_url'); ?>"><?php the_sub_field('explore_directory_county_listing'); ?></a></li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          <?php endwhile; ?>
        <?php endif; ?>

        <p><strong><span class="less-accessible">*</span> = Less accessible preserves.</strong> The less accessibility is due to limited public road access and parking, although neighbors are welcome to visit.</p>

        <p><strong><span class="less-notable">*</span> = Less notable preserves.</strong> These preserves are not generally accessible due to limited public road access and parking, although neighbors are welcome to visit on foot.</p>

        <p>Please respect Sycamore’s neighbors and do not trespass to visit a preserve.</p>
      </div>

      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wild-indiana.svg">
    </div>

    <?php include('learn-indiana-divider.php');?>

    <div class="row two">
      <h1>HOW WE PROTECT LAND</h1>
      <div class="text">
        <?php echo $exploreProtectText; ?>
      </div>
    </div>

    <div class="divider">
      <div class="container">
        <?php if( have_rows('explore_protect_buttons') ): ?>
          <?php while( have_rows('explore_protect_buttons') ): the_row(); ?>
            <a href="<?php the_sub_field('explore_protect_button_url'); ?>" class="btn"><?php the_sub_field('explore_protect_button_text'); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="row three"></div>

    <div class="row four">
      <div>
        <h1>UPCOMING EVENTS</h1>
        <?php echo $exploreUpcomingText; ?>

        <?php include('mini-events-cal.php'); ?>

        <a href="<?php echo $exploreUpcomingBtnURL; ?>" class="btn"><?php echo $exploreUpcomingBtnText; ?></a>
      </div>

      <div>
        <h1>VOLUNTEER OPPORTUNITIES</h1>
        <p><?php echo $exploreVolOppsText; ?></p>

        <a href="<?php echo $exploreVolOppsBtnURL; ?>" class="btn"><?php echo $exploreVolOppsBtnText; ?></a>

        <div class="image"></div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>