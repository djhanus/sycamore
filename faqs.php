<?php get_header(); /* Template Name: FAQs */ ?>
<div class="faqs single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post(); ?>

  <div class="container">
    <h1>FAQs</h1>

    <div>
      <div class="faqs-wrapper">
        <?php if( have_rows('faqs') ): ?>
          <?php while( have_rows('faqs') ): the_row(); ?>
            <div class="faq">
              <div class="question">
                <span>Q:</span>
                <p><strong><?php the_sub_field('faq_question'); ?></strong></p>
                <span class="icon open"></span>
              </div>

              <div class="answer">
                <span>A:</span>
                <?php the_sub_field('faq_answer'); ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>