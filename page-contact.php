<?php
/*
Template Name: Contact
 */
?>


<?php get_header(); ?>


<style>
  body{
    padding-top:0!important;
  }
  .navbar-default{
    display:none;
  }
  footer{
    display:none;
  }
</style>


  <?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
      wpcf7_enqueue_scripts();
    }

    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
      wpcf7_enqueue_styles();
    }
  ?>


<?php while ( have_posts() ) : the_post(); ?>

  <div class='feature-panel hidden-sm hidden-xs'>
    <a href='<?php bloginfo('url')?>'>
      <img class='contact-logo' src='<?php bloginfo('template_url'); ?>/images/contact-logo.png' width='176'>
    </a>
    <h5 class='bold-font-name'>
      <?php the_field('contact_tagline');?>
    </h5>

    <?php if( have_rows('contact_bullets') ): ?>
    <?php 
      while( have_rows('contact_bullets') ): the_row(); 
      // vars
      $title = get_sub_field('title');
      $text = get_sub_field('text');
      $image = get_sub_field('image');
    ?>

      <div class='point'>
        <img class='float-left' src='<?php echo $image; ?>' width='32'>
        <p class='bold-font-name no-margin-bottom'>
          <?php echo $title; ?>
        </p>
        <p class='margin-bottom'>
          <small>
            <?php echo $text; ?>
          </small>
        </p>
      </div>

    <?php endwhile; ?>
    <?php endif; ?>

    <div class='contact-quote'>
      <p class='quote-text'>
        <?php the_field('contact_quote');?>
      </p>
      <cite class='cite'>
        <?php the_field('contact_quote_credit');?>
      </cite>
    </div>
  </div>
  <div class='main-panel'>
    <div class='panel-inner'>
      <section class='contact-section hero-header-lg'>
        <a href='<?php bloginfo('url')?>'>
          <img class='visible-xs visible-sm margin-auto contact-logo-mobile' src='<?php bloginfo('template_url'); ?>/images/mobile-logo.png' width='170'>
        </a>
        <div class='container-fluid'>
          <div class='row'>
            <div class='col-md-2'></div>
            <div class='col-md-8'>
              <h2 class='text-center'>
                <?php the_field('hero_title');?>
              </h2>
              <p class='text-center margin-bottom'>
                <?php the_field('hero_text');?>
              </p>
              <div class='padding-left padding-right'>
                <?php the_field('contact_form_shortcode');?>
              </div>
              <div class='text-center double-margin-top'>
                <h6 class='bold-font-name'>
                  <?php the_field('general_com_title');?>
                </h6>
                <p>
                  <?php the_field('general_com_subtitle');?>
                  <br>
                  <a href='mailto:<?php the_field('general_com_email');?>'>
                    <?php the_field('general_com_email');?>
                  </a>
                </p>
              </div>
            </div>
            <div class='col-md-2'></div>
          </div>
        </div>
      </section>
    </div>
  </div>

<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>