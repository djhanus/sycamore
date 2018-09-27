<?php get_header(); /* Template Name: Learn */ ?>
<div class="learn single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
        $learnHeroHeaderText          = get_field('learn_hero_header_text');
        $learnHeroSubtext             = get_field('learn_hero_subtext');
        $learnHeroImageURL            = get_field('learn_hero_image_url');
        $learnOverviewText            = get_field('learn_overview_text');
        $learnOverviewSidebarHeader   = get_field('learn_overview_sidebar_heading');
        $learnOverviewSidebarText     = get_field('learn_overview_sidebar_text');
        $learnOverviewSidebarBtnText  = get_field('learn_overview_sidebar_button_text');
        $learnOverviewSidebarBtnURL   = get_field('learn_overview_sidebar_button_url');
        $learnSnPText                 = get_field('schools_programs_text');
        $learnSnPShapeText            = get_field('schools_programs_shape_text');
        $schools_programs_button_text = get_field('schools_programs_button_text');
        $schools_programs_button_link = get_field('schools_programs_button_link');
        $learnSnPVideo                = get_field('learn_schools_programs_video');
        $learnFootprintsHeader        = get_field('learn_footprints_heading');
        $learnFootprintsSubtext       = get_field('learn_footprints_subtext');
        $learnFootprintsBtnText       = get_field('learn_footprints_button_text');
        $learnFootprintsBtnURL        = get_field('learn_footprints_button_url');
        $learnMEEEImgURL              = get_field('learn_meee_image_url');
        $learnMEEEHeading             = get_field('learn_meee_heading');
        $learnMEEEText                = get_field('learn_meee_text');
  ?>

  <div class="container">
    <div class="hero-wrapper">
      <div class="hero">
        <div style="background: url('<?php echo $learnHeroImageURL; ?>;"></div>

        <div>
          <h1><?php echo $learnHeroHeaderText; ?></h1>
          <?php echo $learnHeroSubtext; ?>
        </div>
      </div>
      <div class="hero-footer"></div>
    </div>
  </div>

  <div class="row one">
    <div class="container">
      <h1>OVERVIEW</h1>
      <div class="text">
        <div>
          <?php echo $learnOverviewText; ?>
        </div>

        <div>
          <h1><?php echo $learnOverviewSidebarHeader; ?></h1>
          <?php echo $learnOverviewSidebarText; ?>
          <a href="<?php echo $learnOverviewSidebarBtnURL; ?>" class="btn"><?php echo $learnOverviewSidebarBtnText; ?></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row two">
    <div class="container">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kids-learning.jpg');">

      <h1>SCHOOLS AND PROGRAMS</h1>
      <div class="text">
        <div>
          <?php echo $learnSnPText; ?>
        </div>

        <div>
          <h1><?php echo $learnSnPShapeText; ?></h1>
        </div>
      </div>
    </div>

    <div class="container">
      <h3>SAMPLE PROGRAMS:</h3>
      <div class="text">
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/native-plant-project.jpg');">
          <div class="text">
            <h1>NATIVE PLANT PROJECT</h1>
            <p>10-week program with weekly classroom visits to discuss native plants and seed adaptations, plant seeds, grow them in the classroom, and transplant either to pots for kids to take home or into a school garden to tend.</p>
          </div>
        </div>

        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pine-needle-tea.jpg');">
          <div class="text">
            <h1>PINE NEEDLE TEA</h1>
            <p>Discuss the benefits and process of making pine needle tea and other foods out of wild foraged edibles, then make and taste this warm wintery drink. If possible, find white pine trees and pick the needles together for the tea.</p>
          </div>
        </div>
      </div>
      <a href="mailto:<?php echo $schools_programs_button_link; ?>?Subject=Sycamore%20Land%20Trust:%20Learn%20-%20Program%20Connect" class="btn"><?php echo $schools_programs_button_text; ?></a>

      <div class="video-row">
        <?php echo $learnSnPVideo; ?>
      </div>
    </div>
  </div>

  <div class="row three">
    <div class="container">
      <div>
        <h1><?php echo $learnFootprintsHeader; ?></h1>
        <?php echo $learnFootprintsSubtext; ?>
      </div>

      <div>
        <?php include('mini-events-cal.php'); ?>
        <a href="<?php echo $learnFootprintsBtnURL; ?>" class="btn"><?php echo $learnFootprintsBtnText; ?></a>
      </div>
    </div>

    <div class="container">
      <div>
        <img src="<?php echo $learnMEEEImgURL; ?>">
      </div>
      <div>
        <h1><?php echo $learnMEEEHeading; ?></h1>
        <?php echo $learnMEEEText; ?>
      </div>
    </div>

    <div class="container">
      <div>
        <h1>SYCAMORE INSIGHTS</h1>
        <div class="items-wrapper">
          <?php
            $args = array(
              'post_type'       => 'post',
              'order'           => 'ASC',
              'posts_per_page'  => '1',
              'category_name'   => 'insights',
              'post_status'     => 'publish'
            );
            $the_query            = new WP_Query( $args );
          ?>
          <?php if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            $bb_events_featured_image_url = get_field('bb_events_featured_image_url');
          ?>
          <div class="item">
            <?php if ( has_post_thumbnail() ) {  the_post_thumbnail(); } ?>
            <div class="text">
              <h1><?php the_title(); ?></h1>
              <?php the_excerpt(); ?>
              <a href="<?php echo get_permalink(); ?>">Continue reading ></a>
            </div>
          </div>
          <?php endwhile; else: ?>
          <?php endif; wp_reset_postdata();?>
        </div>
      </div>

      <div>
        <h1>EDUCATOR AND FAMILY RESOURCE LINKS</h1>
        <ul>
          <?php if( have_rows('learn_frl_links') ): while ( have_rows('learn_frl_links') ) : the_row(); ?>
          <li><a href="<?php the_sub_field('learn_frl_link_url'); ?>" target="_blank"><?php the_sub_field('learn_frl_link_text'); ?></a></li>
          <?php endwhile; else : endif; ?>
        </ul>
      </div>
    </div>
  </div>

  <?php endwhile; ?>
  <?php include('learn-indiana-divider.php');?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>