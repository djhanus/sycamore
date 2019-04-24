
<?php get_header(); /* Template Name: Standard Template */ ?>
<div class="learn single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
        $standardHeroHeaderText          = get_field('standard_hero_header_text');
        $standardHeroSubtext             = get_field('standard_hero_subtext');
        $standardHeroImageURL            = get_field('standard_hero_image_url');
  ?>

  <div class="container">
    <div class="hero-wrapper">
      <div class="hero">
        <div style="background: url('<?php echo $standardHeroImageURL; ?>;"></div>
        <div>
          <h1><?php echo $standardHeroHeaderText; ?></h1>
          <?php echo $standardHeroSubtext; ?>
        </div>
      </div>
      <div class="hero-footer"></div>
    </div>
  </div>

  <!-- MAIN BODY CONTENT -->
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