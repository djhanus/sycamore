<?php
  $args = array(
    'post_type'       => 'post',
    'order'           => 'ASC',
    'posts_per_page'  => '3',
    'category_name'   => 'event',
    'post_status'     => 'publish'
  );
  $the_query            = new WP_Query( $args );
?>
<ul class="mini-events-cal">
  <?php if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    $bb_event_time_start  = get_field('bb_event_time_start');
    $bb_event_time_end    = get_field('bb_event_time_end');
  ?>
    <li>
      <date>
        <span><?php echo date("M", strtotime($bb_event_time_start)); ?></span>
        <span><?php echo date("d", strtotime($bb_event_time_start)); ?></span>
      </date>
      <?php the_title(); ?>
    </li>
  <?php endwhile; else: ?>
  <?php endif; wp_reset_postdata(); ?>
</ul>