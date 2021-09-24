<?php 
/**
 * Template Name: Search Page
 */
?> 

<?php get_header(); ?>

        <section id="primary" class="content-area">
            <div id="content" class="site-content" role="main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <a href="<?php the_permalink() ?>">
                    <h2><?php the_title(); ?></h2>
                    </a>
                    <p><?php the_post_thumbnail( 'medium' ); ?></p>
                    <?php 
                        global $post;

                       
                        $product = wc_get_product( $post->ID );
                       

                        //print_r($terms);

                        // $product->get_regular_price();
                        // $product->get_sale_price();
                        // $product->get_price();

                        //category

                        $terms = get_the_terms($post->ID, 'product_cat');
                        

                       
                    ?>

                    <p>Price:<?php echo $product->get_price(); ?></p>
                    <?php 
                          foreach ($terms as $term) {

                            $product_cat = $term->name;
                            ?>
                              <p>Category: <?php  echo $product_cat;?></p>
                            <?php
                                break;
                            }
                    ?>
                    

                <?php endwhile; ?>

               

            <?php else : ?>

                <?php echo "No result found"; ?>

            <?php endif; ?>

            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->


<?php get_footer(); ?>