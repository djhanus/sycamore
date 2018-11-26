<?php get_header(); /* Template Name: Homepage */ ?>
<div class="homepage">
  <div class="top-left-leaf"></div>
  <div class="middle-left-leaf"></div>
  <div class="right-leaf"></div>

  <?php
    while ( have_posts() ): the_post();
    $rowOneHeaderH1       = get_field('row_one_heading');
    $rowOneHeaderH3       = get_field('row_one_header_subtext');
    $rowOneURLLink        = get_field('row_one_url_link');
    $rowOneLinkText       = get_field('row_one_link_text');
    $rowOneBGIMage        = get_field('row_one_bg_image');


    $rowTwoHeaderH1       = get_field('row_two_header_text');
    $rowTwoSubtext        = get_field('row_two_subtext');
    $rowTwoURLLink        = get_field('row_two_link_url');
    $rowTwoLinkText       = get_field('row_two_link_text');

    $rowThreeHeaderH1     = get_field('row_three_header_text');

    $rowFourHeaderH1       = get_field('row_four_header_text');
    $rowFourSubtext        = get_field('row_four_subtext');
    $rowFourURLLink        = get_field('row_four_link_url');
    $rowFourLinkText       = get_field('row_four_link_text');

    $rowFiveHeaderH1       = get_field('row_five_header_text');
    $rowFiveSubtext        = get_field('row_five_subtext');
    $rowFiveURLLink        = get_field('row_five_link_url');
    $rowFiveLinkText       = get_field('row_five_link_text');

    $rowSixHeaderH1       = get_field('row_six_header_text');
    $rowSixSubtext        = get_field('row_six_subtext');
    $rowSixURLLink        = get_field('row_six_link_url');
    $rowSixLinkText       = get_field('row_six_link_text');
  ?>

  <div class="row one" style="background: url(<?php echo $rowOneBGIMage; ?>);">
    <div class="container">
      <h1><?php echo $rowOneHeaderH1; ?></h1>

      <div class="text-wrapper">
        <h3><?php echo $rowOneHeaderH3; ?></h3>
        <a href="<?php echo $rowOneURLLink; ?>" class="btn"><?php echo $rowOneLinkText; ?></a>
      </div>
    </div>
  </div>

  <div class="row two">
    <div class="container">
      <div>
        <h2><?php echo $rowTwoHeaderH1; ?></h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/explore-indiana.png">
      </div>
      <div class="text-wrapper">
        <?php echo $rowTwoSubtext; ?>
        <a href="<?php echo $rowTwoURLLink; ?>" class="btn"><?php echo $rowTwoLinkText; ?></a>
      </div>
    </div>
  </div>

  <div class="row three">
    <div class="bottom-left-leaf"></div>
    <div class="bottom-right-leaf"></div>
    <div class="yellow-bug"></div>

    <div class="container">
      <h1><?php echo $rowThreeHeaderH1; ?></h1>
      <h1><?php echo $rowThreeHeaderH1; ?></h1>
    </div>
  </div>

  <div class="row four">
    <div>
      <h2><?php echo $rowFourHeaderH1;?></h2>
      <?php echo $rowFourSubtext;?>
      <a href="<?php echo $rowFourURLLink;?>" class="btn"><?php echo $rowFourLinkText;?></a>
    </div>
    <div></div>
  </div>

  <div class="row five">
    <div class="container">
      <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/swamp.jpg">
      </div>

      <div>
        <h2><?php echo $rowFiveHeaderH1;?></h2>
        <?php echo $rowFiveSubtext;?>
        <a href="<?php echo $rowFiveURLLink;?>" class="btn"><?php echo $rowFiveLinkText;?></a>
      </div>
    </div>
  </div>

  <div class="row six">
    <div class="container">
      <div>
        <h2><?php echo $rowSixHeaderH1;?></h2>
        <p><?php echo $rowSixSubtext;?></p>
        <a href="<?php echo $rowSixURLLink;?>" class="btn"><?php echo $rowSixLinkText;?></a>
      </div>
    </div>
  </div>

  <?php endwhile; wp_reset_query(); ?>
  <?php include('subscribe-divider.php'); ?>
</div><!-- /.homepage -->
<?php get_footer(); ?>