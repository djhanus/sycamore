<?php get_header(); /* Template Name: Give */ ?>
<div class="give single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
          $giveHeroHeader                   = get_field('give_hero_header_text');
          $giveHeroSubtext                  = get_field('give_hero_subtext');
          $giveHeroImageUrl                 = get_field('give_hero_image_url');
          $giveHeroBtnText                  = get_field('give_button_text');
          $giveHeroBtnUrl                   = get_field('give_button_url');

          $give_membership_heading          = get_field('give_membership_heading');
          $give_membership_text             = get_field('give_membership_text');
          $give_membership_button_text      = get_field('give_membership_button_text');
          $give_membership_button_url       = get_field('give_membership_button_url');

          $give_volunteers_heading          = get_field('give_volunteers_heading');
          $give_volunteers_text             = get_field('give_volunteers_text');
          $give_volunteers_button_text      = get_field('give_volunteers_button_text');
          $give_volunteers_button_url       = get_field('give_volunteers_button_url');

          $give_sm_heading                  = get_field('give_sm_heading');
          $give_sm_text                     = get_field('give_sm_text');
          $give_sm_image_url                = get_field('give_sm_image_url');

          $give_pl_heading                  = get_field('give_pl_heading');
          $give_pl_text                     = get_field('give_pl_text');

          $give_ss_heading                  = get_field('give_ss_heading');
          $give_ss_text                     = get_field('give_ss_text');

          $give_no_heading                  = get_field('give_no_heading');
          $give_no_text                     = get_field('give_no_text');
          $give_no_button_text              = get_field('give_no_button_text');
          $give_no_button_link              = get_field('give_no_button_link');

          $give_ncg_heading                 = get_field('give_ncg_heading');
          $give_ncg_text                    = get_field('give_ncg_text');
          $give_ncg_button_text             = get_field('give_ncg_button_text');
          $give_ncg_button_url              = get_field('give_ncg_button_url');

          $give_fi_heading                  = get_field('give_fi_heading');
          $give_fi_text                     = get_field('give_fi_text');
          $give_fi_button_text              = get_field('give_fi_button_text');
          $give_fi_button_url               = get_field('give_fi_button_url');

          $give_ee_heading                  = get_field('give_ee_heading');
          $give_ee_text                     = get_field('give_ee_text');
          $give_ee_button_text              = get_field('give_ee_button_text');
          $give_ee_button_url               = get_field('give_ee_button_url');

          $give_pg_heading                  = get_field('give_pg_heading');
          $give_pg_text                     = get_field('give_pg_text');
          $give_pg_button_text              = get_field('give_pg_button_text');
          $give_pg_button_url               = get_field('give_pg_button_url');

          $give_quote                       = get_field('give_quote');
          $give_quote_cite                  = get_field('give_quote_cite');
  ?>

  <div class="container">
    <div class="hero-wrapper">
      <div class="hero">
        <div style="background: url('<?php echo $giveHeroImageUrl ?>');">
        </div>

        <div>
          <h1><?php echo $giveHeroHeader ?></h1>
          <?php echo $giveHeroSubtext ?>
          <a href="<?php echo $giveHeroBtnUrl ?>" class="btn"><?php echo $giveHeroBtnText ?></a>
        </div>
      </div>
      <div class="hero-footer"></div>
    </div>
  </div>

  <div class="row one">
    <div class="container">
      <div>
        <div class="text">
          <h1><?php echo $give_membership_heading; ?></h1>
          <?php echo $give_membership_text; ?>
          <a href="<?php echo $give_membership_button_url; ?>" class="btn"><?php echo $give_membership_button_text; ?></a>
        </div>

        <div class="text">
          <h1><?php echo $give_volunteers_heading; ?></h1>
          <?php echo $give_volunteers_text; ?>
          <a href="<?php echo $give_volunteers_button_url; ?>" class="btn"><?php echo $give_volunteers_button_text; ?></a>
        </div>
      </div>

      <div>
        <img src="<?php echo $give_sm_image_url; ?>">
        <div class="text">
          <h1><?php echo $give_sm_heading; ?></h1>
          <?php echo $give_sm_text; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="row two">
    <div class="container">
      <div>

      </div>
      <div>
        <h1><?php echo $give_pl_heading; ?></h1>
        <?php echo $give_pl_text; ?>
        <?php if( have_rows('give_pl_buttons') ): ?>
          <?php while( have_rows('give_pl_buttons') ): the_row(); ?>
            <a href="<?php the_sub_field('give_pl_button_url'); ?>" class="btn"><?php the_sub_field('give_pl_button_text'); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row three">
    <div class="container">
      <div></div>

      <div>
        <h1><?php echo $give_ss_heading; ?></h1>
        <?php echo $give_ss_text; ?>
      </div>
    </div>

    <div class="container">
      <h1>OTHER OPPORTUNITIES TO GIVE</h1>

      <div class="wrapper">
        <div class="left">
          <div>
            <h1><?php echo $give_no_heading; ?></h1>
            <?php echo $give_no_text; ?>

            <ul>
              <li>Examples of Named Places:</li>
              <?php if( have_rows('give_no_places') ): ?>
                <?php while( have_rows('give_no_places') ): the_row(); ?>
                  <li><a href="<?php the_sub_field('give_no_link_url'); ?>" class="btn"><?php the_sub_field('give_no_link_text'); ?></a></li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
            <a href="mailto:<?php echo $give_no_button_link; ?>?Subject=Sycamore%20Land%20Trust:%20Give%20-%20Naming%20Opportunities" class="btn"><?php echo $give_no_button_text; ?></a>
          </div>

          <div>
            <h1><?php echo $give_fi_heading; ?></h1>
            <?php echo $give_fi_text; ?>
            <a href="<?php echo $give_fi_button_url; ?>" class="btn"><?php echo $give_fi_button_text; ?></a>
          </div>
        </div>

        <div class="right">
          <div>
            <h1><?php echo $give_ncg_heading; ?></h1>
            <?php echo $give_ncg_text; ?>
            <a href="mailto:<?php echo $give_ncg_button_url; ?>?Subject=Sycamore%20Land%20Trust:%20Give%20-%20Non-Cash%20Gifts" class="btn"><?php echo $give_ncg_button_text; ?></a>
          </div>

          <div>
            <h1><?php echo $give_ee_heading; ?></h1>
            <?php echo $give_ee_text; ?>
            <a href="<?php echo $give_ee_button_url; ?>" class="btn"><?php echo $give_ee_button_text; ?></a>
          </div>
        </div>

        <div class="bottom">
          <div>
            <h1><?php echo $give_pg_heading; ?></h1>
            <?php echo $give_pg_text; ?>
            <a href="<?php echo $give_pg_button_url; ?>" class="btn"><?php echo $give_pg_button_text; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row four">
    <div class="container">
      <div class="wrapper">
        <blockquote>
          <?php echo $give_quote; ?>
        </blockquote>
        <cite>– <?php echo $give_quote_cite; ?></cite>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>