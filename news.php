<?php get_header(); /* Template Name: News */ ?>
<div class="news single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php
    $args = array(
      'post_type'       => 'post',
      'order'           => 'ASC',
      'posts_per_page'  => '100',
      'category_name'   => 'news',
      'post_status'     =>  'publish'
    );

    $the_query = new WP_Query( $args );
  ?>

  <div class="container">
    <h1>News</h1>

    <p>Copy here that Abby will send for intro text.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam</p>

    <div class="results-wrapper">
      <h1>Topic Selection</h1>
      <?php if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="item">
          <?php
            $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
           if ( ! empty( $featured_image_url ) ) { ?>
              <div><?php the_post_thumbnail('thumbnail', array( 'class' => 'featured-image' )); ?></div><div>
            <?php  } else {  ?>
              <div></div><div style="width: 100%; padding: 0;">
          <?php } ?>

            <h1><?php the_title(); ?></h1>
            <ul>
              <li><?php echo get_the_date(); ?></li>
            </ul>

            <?php the_excerpt()?>
          </div>

          <div>

            <ul>
              <?php
                $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) {
                    echo '<li>' . $tag->name . ', ' . '</li>';
                  }
                }
              ?>
            </ul>
            <a href="<?php echo get_permalink(); ?>" class="btn">Read More</a>
          </div>
        </div>
      <?php endwhile; else: ?>
    </div>
  </div>
  <?php endif; wp_reset_postdata(); ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>