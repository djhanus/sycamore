<?php get_header();?>
<div class="news-single standard-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
        $bb_news_single_hero_image_url    = get_field('bb_news_single_hero_image_url');
        $bb_news_single_hero_heading      = get_field('bb_news_single_hero_heading');
        $bb_news_single_hero_subheading   = get_field('bb_news_single_hero_subheading');
        $bb_news_single_hero_text         = get_field('bb_news_single_hero_text');

        $bb_event_location                = get_field('bb_event_location', false, false);
        $bb_event_external_location       = get_field('bb_event_external_location', false, false);
        $bb_event_external_title          = get_field('bb_event_external_title');
        $bb_event_internal_location       = get_field('bb_event_internal_location', false, false);
        $bb_event_date                    = get_field('bb_event_date');
        $bb_event_facebook_event_url      = get_field('bb_event_facebook_event_url');
        $bb_event_rsvp                    = get_field('bb_event_rsvp');
        $bb_event_time_start              = get_field('bb_event_time_start');
        $bb_event_time_end                = get_field('bb_event_time_end');
  ?>

  <div class="container">
    <div class="header-section">
      <?php if( get_field('bb_news_single_hero_image_url') ): ?>
        <img class="hero" src="<?php echo $bb_news_single_hero_image_url; ?>">
      <?php endif; ?>

      <?php if( get_field('bb_news_single_hero_heading') ): ?>
        <h1><?php echo $bb_news_single_hero_heading; ?></h1>
      <?php elseif( ! empty( $post->post_title ) ): ?>
        <h1><?php the_title(); ?></h1>
      <?php else: endif; ?>

      <?php if( get_field('bb_news_single_hero_subheading') ): ?>
        <h4><?php echo $bb_news_single_hero_subheading; ?></h4>
      <?php endif; ?>

      <?php if( get_field('bb_news_single_hero_text') ): ?>
        <h4><?php echo $bb_news_single_hero_text; ?></h4>
      <?php endif; ?>
    </div>

      <?php if( have_rows('bb_news_text_sections') ): ?>
        <?php while( have_rows('bb_news_text_sections') ): the_row(); ?>
          <div class="item">
            <h2><?php the_sub_field('bb_news_text_section_heading'); ?></h2>
            <h3><?php the_sub_field('bb_news_text_section_subheading'); ?></h3>
            <?php the_sub_field('bb_news_text_sections_text'); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    <div class="results-wrapper">
      <div class="item">

        <!--<div>
            <date>
              <span><?php echo date("M", strtotime($bb_event_date)); ?></span>
              <span><?php echo date("d", strtotime($bb_event_date)); ?></span>
            </date>
        </div>-->

        <div class="events-date-time">
          <?php if( get_field('bb_event_location') || get_field('bb_event_date') || get_field('bb_event_time_start') || get_field('bb_event_time_end') ): ?>
              <ul>
                <?php if( get_field('bb_event_internal_location') ): ?>
                  <li><span class="location"></span>
                    <a href="<?php echo get_the_permalink($bb_event_internal_location); ?>"><?php echo get_the_title($bb_event_internal_location); ?></a>
                  </li>
                <?php elseif (get_field('bb_event_external_location')): ?>
                  <li><span class="location"></span>
                    <a href="<?php echo get_field('bb_event_external_location'); ?>"><?php echo $bb_event_external_title; ?></a>
                  </li>
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
        </div>

        <div class="standard-content-wrapper">
          <?php the_content(); ?>
        </div>

          <div class="event-buttons">
          <?php if (get_field('bb_event_facebook_event_url')) : ?> <a href="<?php echo $bb_event_facebook_event_url; ?>" class="btn" target="_blank">FACEBOOK EVENT</a><?php endif; ?>
          <?php if (get_field ('bb_event_rsvp')) : ?> <a href="<?php echo $bb_event_rsvp; ?>" class="btn" target="_blank">RSVP</a> <?php endif; ?>
        </div>

      </div>
    </div>

  </div>

  <?php if( get_field('bb_news_gallery_images') ): ?>
    <div class="container">
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <?php if( have_rows('bb_news_gallery_images') ): ?>
            <?php while( have_rows('bb_news_gallery_images') ): the_row(); ?>
              <div class="item">
                <img src="<?php the_sub_field('bb_news_gallery_image_url'); ?>">
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>