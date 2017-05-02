<?php
/*
Template Name: Features
 */
?>


<?php get_header(); ?>



 <section class='inverse-section home-hero rellax no-padding-bottom' data-rellax-speed='-4' style='background-image:url(<?php the_field('hero_background_image');?>);'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12 text-center rellax' data-rellax-speed='4'>
        <h1>
          <?php the_field('hero_title');?>
        </h1>
        <div class='row'>
          <div class='col-sm-2'></div>
          <div class='col-sm-8'>
            <p class='double-margin-bottom lead'>
              <?php the_field('hero_text');?>
            </p>
          </div>
          <div class='col-sm-2'></div>
        </div>
        <img class='max-width' src='<?php the_field('hero_image');?>' style='position:relative; bottom:-15px;' width='805'>
      </div>
    </div>
  </div>
</section>
<section class='features' style='background:white; position:relative;'>
  <div class='container'>
    <?php if( have_rows('features') ): ?>
    <?php 
      while( have_rows('features') ): the_row(); 
      // vars
      $title = get_sub_field('feature_title');
      $text = get_sub_field('feature_text');
      $image = get_sub_field('feature_image');
    ?>
      <div class='row feature'>
        <div class='col-md-6 features-image'>
          <div class='inner'>
            <img class='img-responsive' src='<?php echo $image; ?>' width='504'>
          </div>
        </div>
        <div class='col-md-6 features-text'>
          <div class='inner'>
            <h3>
              <?php echo $title; ?>
            </h3>
            <p>
              <?php echo $text; ?>
            </p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_template_part( 'content', 'teaser' ); ?>



<?php get_footer(); ?>