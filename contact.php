<?php get_header(); /* Template Name: Contact */ ?>
<div class="contact single-page">
  <div class="container">
    <?php breadcrumbs(); ?>
  </div>

  <?php while ( have_posts() ): the_post();
        $contact_us_image_url               = get_field('contact_us_image_url');
        $contact_us_heading                 = get_field('contact_us_heading');
        $contact_us_text                    = get_field('contact_us_text');
        $contact_phone                      = get_field('contact_phone');
        $contact_fax                        = get_field('contact_fax');
        $contact_mailing_address            = get_field('contact_mailing_address');
        $contact_office_address             = get_field('contact_office_address');
        $contact_form             = get_field('contact_form');
  ?>

  <div class="container">
    <img src="<?php echo $contact_us_image_url; ?>">
  </div>

  <div class="container">
    <div>
      <h1><?php echo $contact_us_heading; ?></h1>
      <?php echo $contact_us_text; ?>

      <p>Phone: <?php echo $contact_phone; ?><br>
      Fax: <?php echo $contact_fax; ?></p>

      <p>Mailing address:<br>
      <?php echo $contact_mailing_address; ?></p>

      <p>Office address (use PO box for mail):<br>
      <?php echo $contact_office_address; ?></p>
    </div>
  </div>

  <div class="container">
    <?php echo $contact_form; ?></p>
  </div>
  <?php endwhile; ?>
</div>
<?php include('subscribe-divider.php'); ?>
<?php get_footer(); ?>