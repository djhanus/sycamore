<?php
  $args = array(
    'post_type'       => 'post',
    'posts_per_page'  => '3',
    'category_name'   => 'event',
    'post_status'     => 'publish',
    'orderby'         => 'meta_value_num',
    'order'           => 'ASC',
    'meta_key'        => 'bb_event_date',
    'meta_query'  => array(
      'relation'    => 'OR',
      array(
        'key'     => 'bb_event_date',
        'value'   => date("Ymd"),
        'compare' => '>='
      )
    )

  );
  $the_query            = new WP_Query( $args );
?>
<ul class="mini-events-cal">
  <?php if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    $bb_event_time_start  = get_field('bb_event_time_start');
    $bb_event_time_end    = get_field('bb_event_time_end');
    $bb_event_date        = get_field('bb_event_date');
  ?>
    <li>
      <date>
        <span><?php echo date("M", strtotime($bb_event_date)); ?></span>
        <span><?php echo date("d", strtotime($bb_event_date)); ?></span>
      </date>
      <span class="mini-events-link">
        <a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
      </span>
    </li>
  <?php endwhile; else: ?>
  <?php endif; wp_reset_postdata(); ?>
</ul>