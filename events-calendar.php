<?php get_header(); /* Template Name: Events Calendar */ ?>
<div class="events-calendar single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>
  <div class="container">

    <?php
      $args = array(
        'post_type'       => 'post',
        'order'           => 'ASC',
        'posts_per_page'  => '100',
        'category_name'   => 'event',
        'post_status'     => 'publish'
      );
      $the_query = new WP_Query( $args ); ?>

    <h1>Events Calendar</h1>

    <p>Copy here that Abby will send for intro text.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam</p>

    <!-- <select>
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </select> -->

    <div class="results-wrapper">
      <h1>2018</h1>
      <?php if($the_query->have_posts() ) : while ( $the_query->have_posts() ) :
        $the_query->the_post();
        $bb_event_location               = get_field('bb_event_location');
        $bb_event_date                   = get_field('bb_event_date');
        $bb_event_facebook_event_url     = get_field('bb_event_facebook_event_url');
        $bb_event_rsvp                   = get_field('bb_event_rsvp');
        $bb_event_time_start             = get_field('bb_event_time_start');
        $bb_event_time_end               = get_field('bb_event_time_end');
      ?>
        <div class="item">
          <div>
            <date>
              <span><?php echo date("M", strtotime($bb_event_date)); ?></span>
              <span><?php echo date("d", strtotime($bb_event_date)); ?></span>
            </date>
          </div>

          <div>
             <h1><?php the_title(); ?></h1>

            <?php if( get_field('bb_event_location') || get_field('bb_event_date') || get_field('bb_event_time_start') || get_field('bb_event_time_end') ): ?>
              <ul>
                <?php if( get_field('bb_event_location') ): ?>
                  <li><span class="location"></span><?php echo $bb_event_location; ?></li>
                <?php endif; ?>

                <?php if( get_field('bb_event_date') || get_field('bb_event_time_start') || get_field('bb_event_time_end') ): ?>
                  <li>
                    <span class="date"></span>
                    <?php
                      if( get_field('bb_event_date') ): echo $bb_event_date; endif;
                      if( get_field('bb_event_date') && get_field('bb_event_time_start')): ?>,&nbsp;<?php endif;
                      if( get_field('bb_event_time_start') ): echo $bb_event_time_start; endif;
                      if( get_field('bb_event_time_end') ): ?>&nbsp;-&nbsp;<?php echo $bb_event_time_end; endif;
                    ?>
                  </li>
                <?php endif; ?>
              </ul>
            <?php endif; ?>

            <?php the_content()?>
          </div>

          <div>
            <a href="<?php echo $bb_event_facebook_event_url; ?>" class="btn" target="_blank">FACEBOOK EVENT</a>
            <a href="<?php echo $bb_event_rsvp; ?>" class="btn" target="_blank">RSVP</a>
          </div>
        </div>
      <?php endwhile; else: ?>
    </div>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>