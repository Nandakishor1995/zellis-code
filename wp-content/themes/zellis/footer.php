<footer class="bg-dark pt-5 pb-4">
  <div class="container-fluid text-md-left">
    <div class="row text-md-left">
      <!-- Logo Column -->
      <div class="col-md-3">
        <a class="navbar-brand" href="#"><img src="<?php the_field('footer_logo', 'option'); ?>"></a>
        <img class="makers" src="<?php the_field('Lesser-Evil-logo', 'option'); ?>" alt="LesserEvil company logo">
      </div>
      <!-- Subscription Form Column -->
      <div class="col-md-2">
       
        <?php the_field('shop_and_learn_menu', 'option'); ?>
       
      </div>
      <!-- Social Media Column -->
      <div class="col-md-2">
        <?php the_field('general-menu', 'option'); ?>
      </div>
      <!-- Additional Column for Flexibility or Contact Info -->
      <div class="col-md-5">
        
        <div class="row">
          <div class="col-12">
              <div class="newsletter-subscribe">
                <h5 class="me-3 mb-0"><?php the_field('news_letter_title', 'option'); ?></h5>
                  <div class="newsletter">
                      <?php the_field('newsletter_shortcode', 'option'); ?>
                      <!-- <form class="d-flex" style="width: 100%;">
                          <input type="email" class="form-control" placeholder="your Email Address" aria-label="Your Email" aria-describedby="button-addon2">
                          <button class="btn btn-primary" type="submit" id="button-addon2">SUBMIT</button>
                      </form> -->
                  </div>
              </div>
          </div>
      </div>
        <div class="social-media">
        <a class="btn btn-primary btn-floating m-1" target="_blank" href="<?php the_field('facebook_url', 'option'); ?>" role="button"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-primary btn-floating m-1" target="_blank" href="<?php the_field('twitter-url', 'option'); ?>" role="button"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-primary btn-floating m-1" target="_blank" href="<?php the_field('google-url', 'option'); ?>" role="button"><i class="fab fa-google"></i></a>
        <a class="btn btn-primary btn-floating m-1" target="_blank" href="<?php the_field('instagram-url', 'option'); ?>" role="button"><i class="fab fa-instagram"></i></a>
      </div>
      </div>
    </div>
  </div>
</footer>
<div class="container-fluid copyright-footer">
  <div class="row">
  <div class="col-sm-6 col-md-3">
    <p>SHIIPINGS & RETURNS</p>
  </div>
  <div class="col-sm-6 col-md-3">
    <p>SHIIPINGS & RETURNS</p>
  </div>
  <div class="col-sm-6 col-md-3">
    <p>SHIIPINGS & RETURNS</p>
  </div>
  <div class="col-sm-6 col-md-3">
    <p>SHIIPINGS & RETURNS</p>
  </div>
</div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php wp_footer();?>
<?php get_footer(); ?>
</body>
</html>
