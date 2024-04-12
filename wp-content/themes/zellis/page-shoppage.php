<?php /* Template Name: Shop Page Template */ ?>
<?php get_header(); ?>
















<section class="container-fluid products">
<div class="container">
    <div class="row justify-content-center">
        <h2 class="shop-title"><?php the_field('shop_title'); ?></h2>
        <h3 class="sub-title"><?php the_field('shop_sub_heading'); ?></h3>
    </div>
</div>
    <div class="container">


    

        <div class="row align-items-start">

        <?php
// Ensure WooCommerce is active
if ( class_exists( 'WooCommerce' ) ) {

    // Start the loop
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();

            // Get WooCommerce products
            $args = array(
                'post_type' => 'product', // Set post type to product
                'posts_per_page' => -1,   // Display all products
            );
            $products = new WP_Query( $args );

            // Check if there are products
            if ( $products->have_posts() ) :
                while ( $products->have_posts() ) : $products->the_post();

                    // Get product data
                    $product = wc_get_product( get_the_ID() );

                    // Output product information
                    ?>



          <div class="col-md-4 product-info">
          <?php echo $product->get_image(); ?>
           <a class="product-link" href="<?php echo get_permalink(); ?>"> <h4 class="product-title"><?php echo $product->get_name(); ?></h4></a>
            <div class="star-rating">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                 <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
            </div>
              <p>12-Bar Box | <?php echo $product->get_price_html(); ?></p>
            
              <?php echo $product->get_short_description(); ?>


                

          </div>

          <?php

endwhile;
wp_reset_postdata(); // Reset post data

else :
echo 'No products found';
endif;

endwhile;
endif;
}
?>
          
          
        </div>
        
      </div>

</section>

<?php get_footer(); ?>