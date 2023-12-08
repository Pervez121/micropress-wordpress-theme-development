<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Micropress
 */

?>

	
<footer class="footer-main">
        <div class="footer-inner">
        <div class="row">

    
          <div class="col-sm-12 col-md-3 col-lg-4 mb-3">
            <div class="nav-brand">
                <!-- <a class="navbar-brand" href="#"><img src="./assets/images/micropress_logo.png" alt="" srcset=""
                    width="250"></a> -->
                    <div class="custom-logo">
                      <?php
                      if(!empty(the_custom_logo())){
                        the_custom_logo();
                      }
                      ?>
                    </div>
                    <p class="about">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore aliquid nisi delectus eaque fugiat maiores?
                    </p>
                    <hl class="contact-info">
                        <li class="email"><span class="email-title"><b>Email: </b></span>mail@micropress.com</li>
                        <li class="phone"><span class="phone-title"><b>Phone: </b> </span>+92-316-9201238</li>
                    </hl>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3 mb-3">
            <h5>Quick Links</h5>
            <ul class="nav flex-column">
              <?php
                  get_template_part('/template-parts/navigation')
              ?>
            </ul>
          </div>
          <div class="ccol-sm-12 col-md-6 col-lg-5 mb-3 mar-auto aligh-items-center">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row  gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
    
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>© 2023 Company, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-body-emphasis" href="#"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/facebook.png" alt="" class="social"></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/insta.png" alt="" class="social"></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="https://www.linkedin.com/in/pervez-iqbal-pi/"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/linlkden.png" alt="" class="social"></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="https://pervez-iqbal.netlify.app/"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/website.png" alt="" class="social"></a></li>
          </ul>
        </div>
    </div>
      </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
