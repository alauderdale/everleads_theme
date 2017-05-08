<?php
/*
Template Name: Login
 */
?>


<?php get_header(); ?>


<style>
  body{
    padding-top:0!important;
    background-color: #fafafa;
  }
  .navbar-default{
    display:none;
  }
  footer{
    display:none;
  }
</style>


<section>
  <div class='container'>
    <div class='row'>
      <div class="col-lg-12 text-center">
        <a href="<?php bloginfo('url')?>">
          <img class=' text-center double-margin-bottom margin-auto' src='<?php the_field('login_logo');?>' width='176'>
          <?php the_field('hero_title');?>
        </a>
      </div>
      <div class='col-sm-12 text-center'>
        <div class="panel login-panel">
          <div class="padded">
            <form id="login" method="POST" action="http://www.listsonline.com/ExternalLogin.aspx">
              <div class='row'>
                <div class='col-md-12'>
                  <p>Welcome back!</p>
                  <div class='form-group'>
                    <input type="text" name="username" class="form-control input-lg" placeholder="Username" />
                  </div>
                </div>
                <div class='col-md-12'>
                  <div class='form-group'>
                    <input type="password" name="password" class="form-control input-lg" placeholder="Password" />
                  </div>
                </div>
                <div class='col-md-12'>
                  <div class='form-group no-margin-bottom'>
                    <input type="submit" value="Sign in" class="btn-primary btn btn-strech btn-lg"/>
                  </div>
                  <input type="hidden" name="error-url" value="http://everleads.com/?error=login-failed"/>
                  <input type="hidden" name="domain" value="everleads"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>