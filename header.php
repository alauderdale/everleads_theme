<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>
<body class='index'>
  <nav class='navbar navbar-default navbar-fixed-top global-nav'>
    <div class='container half-padding-bottom'>
      <div class='navbar-header'>
        <a class='navbar-brand' href='<?php bloginfo('url')?>'>
          <img class='hidden-xs' src='<?php bloginfo('template_url'); ?>//images/logo.png' width='146'>
          <img class='visible-xs' src='<?php bloginfo('template_url'); ?>//images/mobile-logo.png'>
        </a>
        <div class='visible-xs'>
          <div class='pull-right'>
            <button aria-expanded='false' aria-label='toggle menu' class='tcon tcon-menu--xcross menu-button' data-target='#collapse-menu' data-toggle='collapse' type='button'>
              <span aria-hidden='true' class='tcon-menu__lines'></span>
              <span class='tcon-visuallyhidden'>
                toggle menu
              </span>
            </button>
          </div>
        </div>
      </div>
      <div class='hidden-xs'>
        <div class='desktop-nav'>
          <div class='navbar-right'>

			<?php wp_nav_menu( array( 
				'theme_location' => 'menu-primary', 
				'container' => false, 
				'menu_class' => 'nav navbar-nav',
				'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
			)); ?>


            <ul class='nav navbar-nav'>
              <li>
                <a class='btn btn-primary btn-header' href='<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>'>
                  Start Now
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class='visible-xs'>
      <div class='collapse navbar-collapse mobile-nav' id='collapse-menu'>

		<?php wp_nav_menu( array( 
			'theme_location' => 'menu-primary', 
			'container' => false, 
			'menu_class' => 'nav navbar-nav no-margin-bottom',
			'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
		)); ?>

        <ul class='nav navbar-nav'>
          <li>
            <a class='link-color' href='<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>'>
              Start Now
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end menu -->


