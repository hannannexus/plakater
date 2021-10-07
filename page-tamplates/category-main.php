<?php 

/*
    Template Name: Main Category
*/
?>

<?php get_header();?>
<!--- Section Start --->
<section class="section-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="catagory-info-area">
         <div class="cat-title text-center">
            <?php 
                $cate_title = get_field('category_title');
                $cate_desc = get_field('categroy_description');
                $cate_image = get_field('banner_image');
                $cate_image_2 = get_field('banner_image_2');
                $cate_image_3 = get_field('banner_image_3');
                $cate_image_4 = get_field('banner_image_4');
                $cate_image_5 = get_field('banner_image_5');
  
            ?>
            <?php if($cate_title): ?>
           <h1><?php echo $cate_title;?></h1>
           <?php endif; ?>
         </div>
         <div class="cat-detail text-center">
            <?php if($cate_desc): ?>
           <h3><?php echo $cate_desc;?></h3>
           <?php endif; ?>
           <p>            
            Vil du gerne kunne finde dine nye plakater med mere ro i sindet? Det er lige præcis derfor vi har cuttet udvalget ned i kategorien Bestsellers fra SimonHolst.dk. Her har vi samlet de mest populære plakater fra SimonHolst.dk og lagt dem i én kategori – På den måde er det mere enkelt og overskueligt for dig, at finde de plakater andre ser som vores bestsellers.
           </p>
         </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="cat-banner">
        <?php if(!empty($cate_image)): ?>
        <img class="img-fluid" src="<?php echo esc_url($cate_image['url']);?>" alt="cat-banner Responsive image">
        <?php endif; ?>
    </div>
      <div class="content-area">
        <div class="">
        
        </div>
     </div>
    </div>
  </div>
</div>
</section>
<!--- Section  End --->
<!--- Cat Section Start --->
<section class="section-wrapper">

  <div class="container">
    <div class="row">
     <div class="col-md-12">
     <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'boerneplakater', 'orderby' => 'rand' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <h2></h2>

                    <div class="cat_product">    

                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

                            <h3><?php the_title(); ?></h3>

                            <span class="price"><?php echo $product->get_price_html(); ?></span>                    

                        </a>

                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                   </div>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
     </div>        
  </div>

</section>

<!--- Section  End --->

<!-- section start -->
<section>
<div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="cat-banner">
        <?php if(!empty($cate_image_2)): ?>
        <img class="img-fluid" src="<?php echo esc_url($cate_image_2['url']);?>" alt="cat-banner Responsive image">
        <?php endif; ?>
    </div>
      <div class="content-area">
        <div class="">
        
        </div>
     </div>
    </div>
  </div>
</section>

<!--- Cat Section Start --->
<section class="section-wrapper">

  <div class="container">
    <div class="row">
     <div class="col-md-12">
     <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'propaganda', 'orderby' => 'rand' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <h2></h2>

                    <div class="cat_product">    

                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

                            <h3><?php the_title(); ?></h3>

                            <span class="price"><?php echo $product->get_price_html(); ?></span>                    

                        </a>

                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                   </div>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
     </div>        
  </div>

</section>

<!--- Section  End --->

<!-- Img section start -->
<section>
<div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="cat-banner">
        <?php if(!empty($cate_image_3)): ?>
        <img class="img-fluid" src="<?php echo esc_url($cate_image_3['url']);?>" alt="cat-banner Responsive image">
        <?php endif; ?>
    </div>
      <div class="content-area">
        <div class="">
        
        </div>
     </div>
    </div>
  </div>
</section>

<!--- Cat Section Start --->
<section class="section-wrapper">

  <div class="container">
    <div class="row">
     <div class="col-md-12">
     <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'klimaplakater', 'orderby' => 'rand' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <h2></h2>

                    <div class="cat_product">    

                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

                            <h3><?php the_title(); ?></h3>

                            <span class="price"><?php echo $product->get_price_html(); ?></span>                    

                        </a>

                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                   </div>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
     </div>        
  </div>

</section>

<!--- Section  End --->
<?php get_footer();?>