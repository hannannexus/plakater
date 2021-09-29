<?php 
    /*
    Template Name: CategoryOne
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
  </div>
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="cat-banner">
        <img class="img-fluid" src="assets/img/cat-banner/Køkkenplakater.jpg" alt="cat-banner Responsive image">
      </div>
      <div class="content-area">
      <div class="carusal">
      <?php //echo do_shortcode('[best_selling_products]'); ?>
      </div>
    </div>
    </div>
  </div>

</section>
<!--- Section  End --->


<?php get_footer();?>