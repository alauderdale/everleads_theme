<?php
/*
Template Name: Home
 */
?>


<?php get_header(); ?>



<section class='inverse-section home-hero rellax' data-rellax-speed='-4' style='background-image:url(<?php the_field('hero_background_image');?>)'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12 text-center rellax' data-rellax-speed='4'>
        <h1>
					<?php the_field('hero_title');?>
        </h1>
        <div class='row'>
          <div class='col-sm-2'></div>
          <div class='col-sm-8'>
            <p class='margin-bottom lead'>
              <?php the_field('hero_text');?>
            </p>
          </div>
          <div class='col-sm-2'></div>
        </div>
        <a class='btn btn-primary btn-strech' href='<?php the_field('hero_cta_link');?>'>
          <?php the_field('hero_cta_text');?>
        </a>
      </div>
    </div>
  </div>
</section>
<div class='partners-container'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-1'></div>
      <div class='col-sm-10'>
        <img class='max-width' src='<?php the_field('teusted_by_logos');?>'>
      </div>
      <div class='col-sm-1'></div>
    </div>
  </div>
</div>
<section style='background:white; position:relative;'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <h6 class='text-uppercase primary-text-color bold-font-name text-center'>
          <?php the_field('how_it_works_top_title');?>
        </h6>
      </div>
    </div>
    <div class='row text-center'>
      <div class='col-lg-12'>
        <h3>
          <?php the_field('how_it_works_bottom_title');?>
        </h3>
      </div>
    </div>
    <div class='row double-padding-top' style='position:relative;'>
      <div class='clouds rellax hidden-sm hidden-xs' data-rellax-speed='.6' style='background:url(<?php bloginfo('template_url'); ?>/images/clouds2.png) no-repeat center center; width:100%; height:100%; position:absolute; top:-80px; right:50px; bottom:0;  background-size:65%; '></div>
      <div class='col-md-1'></div>
      <div class='col-md-5'>
        <div class='padded no-padding-top'>
          <img class='img-responsive half-margin-bottom' src='<?php the_field('how_step_one_image');?>' width='282'>
          <p class='bold-font-name text-color'>
            <?php the_field('how_step_one_title');?>
          </p>
          <p>
            <?php the_field('how_step_one_text');?>
          </p>
        </div>
      </div>
      <div class='col-md-5'>
        <div class='padded no-padding-top'>
          <img class='img-responsive half-margin-bottom' src='<?php the_field('how_step_two_image');?>' width='282'>
          <p class='bold-font-name text-color'>
            <?php the_field('how_step_two_title');?>
          </p>
          <p>
            <?php the_field('how_step_two_text');?>
          </p>
        </div>
      </div>
      <div class='col-md-1'></div>
    </div>
    <div class='row margin-top'>
      <div class='col-sm-1'></div>
      <div class='col-sm-10'>
        <div class='padded no-padding-top no-padding-bottom'>
          <hr>
        </div>
      </div>
      <div class='col-sm-1'></div>
    </div>
    <div class='row double-padding-top'>
      <div class='col-md-1'></div>
      <div class='col-md-5 col-md-push-5'>
        <div class='padded'>
          <img class='img-responsive' src='<?php the_field('how_step_three_image');?>' width='330'>
        </div>
      </div>
      <div class='col-md-5 col-md-pull-5'>
        <div class='padded'>
          <h5 class='bold-font-name'>
            <?php the_field('how_step_three_title');?>
          </h5>
          <p>
            <?php the_field('how_step_three_text');?>
          </p>
          <ul class='pricing-link'>
            <li class='bold-font-name'>
              <a class='arrow-action-link' href='<?php the_field('how_step_three_link');?>'>
                <span class='underline'>
                  <?php the_field('how_step_three_link_title');?>
                </span>
                <i class='fa fa-long-arrow-right'></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class='col-md-1'></div>
    </div>
  </div>
</section>
<section class='light-blue-band' style='position:relative;'>
  <div class='clouds rellax' data-rellax-speed='-2' style='background:url(<?php bloginfo('template_url'); ?>/images/clouds.png) no-repeat top center; width:100%; height:100%; position:absolute; top:0; bottom:0; background-size:50%; '></div>
  <div class='container margin-top' style='z-index:999; position:relative;'>
    <div class='col-lg-12'>
      <div class='row'>
        <h6 class='text-uppercase primary-text-color bold-font-name text-center'>
          <?php the_field('features_title_top');?>
        </h6>
      </div>
    </div>
    <div class='row text-center'>
      <div class='col-lg-12'>
        <h3>
          <?php the_field('features_title_bottom');?>
        </h3>
      </div>
    </div>
    <div class='row double-margin-top'>
      <div class='col-lg-12 text-center'>
        <div class='padded'>
          <img class='visible-xs margin-auto max-width' src='<?php bloginfo('template_url'); ?>/images/mobile-home-marketing-guru.png' width='407'>
          <img class='margin-auto max-width hidden-xs' src='<?php the_field('features_image');?>' width='919'>
        </div>
      </div>
    </div>
    <div class='row margin-top'>
      <div class='col-lg-1'></div>
      <div class='col-lg-10'>
        <div class='row'>
        	<?php if( have_rows('features_bullets') ): ?>
          <?php 
	          while( have_rows('features_bullets') ): the_row(); 
	          // vars
	          $title = get_sub_field('title');
	          $text = get_sub_field('text');
	          $image = get_sub_field('image');
      		?>

	          <div class='col-md-4'>
	            <div class='padded no-padding-bottom'>
	              <img class='float-left' src='<?php echo $image; ?>' width='32'>
	              <h5 class='bold-font-name'>
	                <?php echo $title; ?>
	              </h5>
	              <p>
	                <?php echo $text; ?>
	              </p>
	            </div>
	          </div>

      		<?php endwhile; ?>
      		<?php endif; ?>
        </div>
      </div>
      <div class='col-lg-1'></div>
    </div>
    <div class='row double-margin-bottom text-center margin-top'>
      <div class='col-lg-12'>
        <a class='btn btn-primary btn-shadow margin-top' href='<?php the_field('features_cta_link');?>'>
          <?php the_field('features_cta_text');?>
        </a>
      </div>
    </div>
  </div>
</section>
<section>
  <div class='container margin-top'>
    <div class='row'>
      <h6 class='text-uppercase primary-text-color bold-font-name text-center'>
        <?php the_field('stats_title_top');?>
      </h6>
    </div>
    <div class='row text-center'>
      <h3>
        <?php the_field('stats_title_bottom');?>
      </h3>
    </div>
    <div class='row center-block'>
      <div class='col-sm-1'></div>
      <div class='col-sm-10'>
        <div class='call-out-card text-center margin-top'>
          <h1 class='pink-num-call-out padding-top callout-text-sm'>
            <?php the_field('stats_number');?>
          </h1>
          <h4 class='padding-bottom body-text-color'>
            <?php the_field('stats_label');?>
          </h4>
        </div>
      </div>
      <div class='col-sm-1'></div>
    </div>
    <div class='row double-margin-top'>
      <div class='col-sm-1'></div>
      <div class='col-sm-4'>
        <img class='img-responsive' src='<?php the_field('stats_quote_logo');?>' width='286'>
      </div>
      <div class='col-sm-6'>
        <blockquote class='blockquote'>
          <p class='quote-text'>
            <?php the_field('stats_quote');?>
          </p>
        </blockquote>
        <cite class='cite'>
          <?php the_field('stats_quote_credit');?>
        </cite>
      </div>
      <div class='col-sm-1'></div>
    </div>
  </div>
</section>






<!-- <?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; // end of the loop. ?> -->


<?php get_template_part( 'content', 'teaser' ); ?>



<?php get_footer(); ?>