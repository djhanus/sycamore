<?php get_header(); /* Template Name: Standard Page */ ?>
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

      <?php echo the_content(); ?>
     
       
    
    </div>
  </div>


  <?php endwhile; ?>
  <?php include('learn-indiana-divider.php');?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>