<?php
  $bg = array('everlead-lightbulb.png', 'everlead-roll.png', 'everlead-data.png' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>


        <section class='inverse-section bg-cover home-footer-bg'>
          <div class='container'>
            <div class='row text-center navy-layer'>
              <img src='<?php bloginfo('template_url'); ?>/images/<?php echo $selectedBg; ?>' width='124'>
            </div>
            <div class='row'>
              <h6 class='text-uppercase bold-font-name text-center half-padding-top'>
                Ready To Get Started
              </h6>
            </div>
            <div class='row text-center'>
              <h3>
                You’re going to be amazing
              </h3>
            </div>
            <div class='row text-center margin-bottom'>
              <a class='btn btn-primary btn-shadow btn-strech margin-top' href='<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>'>
                Contact sales
              </a>
            </div>
          </div>
        </section>