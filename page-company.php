<?php
/*
Template Name: Company
 */
?>


<?php get_header(); ?>


<section class='inverse-section home-hero rellax' data-rellax-speed='-4' style='background-image:url(<?php the_field('hero_background_image');?>);'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12 text-center rellax' data-rellax-speed='4'>
        <h1>
          <?php the_field('hero_title');?>
        </h1>
        <div class='row'>
          <div class='col-sm-2'></div>
          <div class='col-sm-8'>
            <p class='lead no-margin-bottom'>
              <?php the_field('hero_text');?>
            </p>
          </div>
          <div class='col-sm-2'></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section style='background:white; position:relative;'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-5 col-sm-push-7'>
        <div class='visible-xs'>
          <img class='max-width' data-rellax-speed='-.3' src='<?php the_field('about_image_mobile');?>' width='291'>
        </div>
        <div class='company-images hidden-xs'>
          <div class='inner'>
            <!-- /pink -->
            <img class='img-two rellax' data-rellax-speed='-.3' src='<?php the_field('about_image_one');?>' width='291'>
            <!-- /b;ue -->
            <img class='img-one rellax' data-rellax-speed='-.4' src='<?php the_field('about_image_two');?>' width='205'>
            <!-- /brown -->
            <img class='img-three rellax' data-rellax-speed='-.5' src='<?php the_field('about_image_three');?>' width='184'>
          </div>
        </div>
      </div>
      <div class='col-sm-7 col-sm-pull-5'>
        <div class='padded company-text'>
          <h3>
            <?php the_field('about_title');?>
          </h3>
          <p>
            <?php the_field('about_text');?>
          </p>
        </div>
        <div class='row'>
          <div class='col-sm-6'>
            <div class='padding-left margin-bottom'>
              <div class='quarter-margin-bottom'>
                <img class='float-left' src='<?php the_field('location_icon');?>' style='position:relative; top:-3px; right:10px;' width='30'>
                <h6 class='text-uppercase primary-text-color bold-font-name no-margin-bottom'>
                  <?php the_field('location_title');?>
                </h6>
              </div>
              <p style='margin-left:30px;'>
                <span class='bold-font-name text-color'>
                  <?php the_field('location_line_one');?>
                </span>
                <br>
                <?php the_field('location_line_two');?>
              </p>
            </div>
          </div>
          <div class='col-sm-6'>
            <div class='padding-left margin-bottom'>
              <div class='quarter-margin-bottom'>
                <img class='float-left' src='<?php the_field('digital_icon');?>' style='position:relative; top:-3px; right:10px;' width='30'>
                <h6 class='text-uppercase primary-text-color bold-font-name no-margin-bottom'>
                  <?php the_field('digital_title');?>
                </h6>
              </div>
              <p style='margin-left:30px;'>
                <span class='bold-font-name text-color'>
                  <?php the_field('digital_line_one');?>
                </span>
                <br>
                <?php the_field('digital_line_two');?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_template_part( 'content', 'teaser' ); ?>



<?php get_footer(); ?>