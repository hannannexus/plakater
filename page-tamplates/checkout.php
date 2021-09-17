<?php 
    /*
        Template Name: Checkout page
    */
?>

<?php get_header();?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo do_shortcode('[woocommerce_checkout]');?>
            </div>
        </div>
    </div>
<?php get_footer();?>
