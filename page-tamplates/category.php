<?php 
    /*
    Template Name: CategoryOne
    */
?>

<?php get_header();?>

<!--- Section Start --->
<section class="section-wrapper">
  <!-- <div class="container">
    <div class="row">
      <div class="col-md-12">




        <div class="catagory-info-area">
         <div class="cat-title text-center">
           <h1>BESTSELLERS</h1>
         </div>
         <div class="cat-detail text-center">
           <h3>POPULÆRE PLAKATER FRA SIMONHOLST.DK</h3>
           <p>            
            Vil du gerne kunne finde dine nye plakater med mere ro i sindet? Det er lige præcis derfor vi har cuttet udvalget ned i kategorien Bestsellers fra SimonHolst.dk. Her har vi samlet de mest populære plakater fra SimonHolst.dk og lagt dem i én kategori – På den måde er det mere enkelt og overskueligt for dig, at finde de plakater andre ser som vores bestsellers.
           </p>
         </div>
        </div>
      </div>
    </div>
  </div> -->


  <div class="container">
    <div class="row">
    <?php 
        $product_categories = get_terms( 'product_cat', 'hide_empty=0' );
        if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ):
            foreach ( $product_categories as $category ):
      ?>
      <div class="col-md-3">
        <div class="cat-banner">
          <?php 
            $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
            $image = wp_get_attachment_url( $thumbnail_id );
            if($image){?>
              <img src="<?php echo esc_url( $image ); ?>" alt="" />

          <?php }?>      

        </div>
        <div class="content-area">
          <div class="carusal">
          <h4><a href="<?php echo esc_url( get_term_link( $category ) ); ?>"><?php echo esc_html( $category->name ); ?></a></h4>
          </div>
        </div>


      </div>
    <?php endforeach;?>
    <?php endif;?>
  </div>

</section>
<!--- Section  End --->


<?php get_footer();?>