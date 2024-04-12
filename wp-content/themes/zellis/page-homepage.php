<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>
<section class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-md-7 text-white">
          <h1 class="hero-title"><?php the_field('banner_title'); ?></h1>
          <a href="<?php the_field('banner_botton_url'); ?>" class="btn btn-primary hero-button"><?php the_field('banner_botton_text'); ?></a>
        </div>
        <div class="col-md-5">
          <img src="<?php the_field('banner_right_image'); ?>" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </section>

  
  <section class="container-fluid contentrow">

    <div class="row content-section">
      <div class="col-12">
        <h2 class="text-center content-heading"><?php the_field('introduction_title'); ?></h2>
      </div>
    </div>
    
    <div class="row content-col-section">
        <div class="col-sm-6 col-md-3">
          <img src="<?php the_field('verified_logo'); ?>" class="img-fluid" alt="non gmo">
        </div>
        <div class="col-sm-6 col-md-3">
          <h2 class="content-heading"><?php the_field('protein'); ?></h2>
          
        </div>
        <div class="col-sm-6 col-md-3">
          <h2 class="content-heading"><?php the_field('suger_contains'); ?></h2>
          
        </div>
        <div class="col-sm-6 col-md-3">
          <h2 class="content-heading"><?php the_field('fiber_containes'); ?></h2>
          
        </div>
    </div>
  </section>

 <section class="product-carosel" id="product-carosel">
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Slider_Background.png" class="d-block w-100" alt="...">
        
        <div class="carousel-caption d-none d-md-block">
          <div class="row">
            <div class="col-sm-5">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_left.png">
            </div>
            <div class="col-sm-7">
              <h3>Peanut Butter Cup</h3>

              <div class="icons mt-3">
                            <img class="right-image icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/LesserEvil_company_logo.png" alt="LesserEvil company logo">
                            <img class="right-image icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/LesserEvil_company_logo.png" alt="LesserEvil company logo">
                            <img class="right-image icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/LesserEvil_company_logo.png" alt="LesserEvil company logo">
                        </div>


              <p>Because who doesn't love the classic combination of peanut butter and chocolate?</p>
              <a href="#" class="btn btn-primary hero-button" tabindex="0">Treat Yourself</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Slider_Background.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div class="row">
            <div class="col-sm-5">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_left.png">
            </div>
            <div class="col-sm-7">
              <h3>Peanut Butter Cup</h3>
              <div class="icons mt-3">
                            <img class="right-image icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/LesserEvil_company_logo.png" alt="LesserEvil company logo">
                            <img class="right-image icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/LesserEvil_company_logo.png" alt="LesserEvil company logo">
                            <img class="right-image icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/LesserEvil_company_logo.png" alt="LesserEvil company logo">
                        </div>
              <p>Because who doesn't love the classic combination of peanut butter and chocolate?</p>
              <a href="#" class="btn btn-primary hero-button" tabindex="0">Treat Yourself</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Slider_Background.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div class="row">
            <div class="col-sm-5">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_left.png">
            </div>
            <div class="col-sm-7">
              <h3>Peanut Butter Cup</h3>
              <div class="icons mt-3">
                            <img class="right-image icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/LesserEvil_company_logo.png" alt="LesserEvil company logo">
                            <img class="right-image icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/LesserEvil_company_logo.png" alt="LesserEvil company logo">
                            <img class="right-image icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/LesserEvil_company_logo.png" alt="LesserEvil company logo">
                        </div>
              <p>Because who doesn't love the classic combination of peanut butter and chocolate?</p>
              <a href="#" class="btn btn-primary hero-button" tabindex="0">Treat Yourself</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</section>

<section class="nutritionfacts bg-light">

  <div class="container py-5">
    <div class="row text-center">
      <div class="col-12">
        <h2>Setting the bar Extremely high</h2>
        <h5>Make sure to follow us on IG to keep up with all of our tasty adventures</h5>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
            	<?php //the_field('ig_video'); ?>
               <video width="100%" height="280px" controls>
                <source src="<?php echo get_stylesheet_directory_uri(); ?>//images/vg-video.mp4" type="video/mp4">
              </video>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="<?php the_field('ig_image_one'); ?>" class="card-img-top" alt="...">
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="<?php the_field('ig_image_two'); ?>" class="card-img-top" alt="...">
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="<?php the_field('ig_image_three'); ?>" class="card-img-top" alt="...">
                
            </div>
        </div>
    </div>
</div>

</section>

<?php get_footer(); ?>