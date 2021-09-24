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
                    <p><?php the_excerpt(); ?></p>
                    <p><?php the_post_thumbnail( 'large' ); ?></p>

                <?php endwhile; ?>

               

            <?php else : ?>

                <?php echo "No result found"; ?>

            <?php endif; ?>

            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->


<?php get_footer(); ?>