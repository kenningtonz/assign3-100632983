<?php

/**
 * Template part for displaying posts
 *
 * @package WordPress
 */



// Display custom query only on the homepage and one additional page (excluding the Posts Page)
?>
<section class="posts dropShadow alignwide">
<?php
// if ( is_home() || is_page( 'about' ) ) {

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
    );

    $custom_query = new WP_Query( $args );

    if ( $custom_query->have_posts() ) {
        while ( $custom_query->have_posts() ) {
            $custom_query->the_post();
            ?>

            <article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            

                <div class="post-header">
                <?php if ( has_post_thumbnail() ) : ?>
                    <a class="post-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('small'); ?>
                    </a>
                <?php endif; ?>
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>

                    <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'your-text-domain' ); ?></a>
            </article>

            <?php
        }

        // Pagination
        echo '<div class="pagination">';
        echo paginate_links( array(
            'total'    => $custom_query->max_num_pages,
            'current'  => max( 1, get_query_var( 'paged' ) ),
        ) );
        echo '</div>';

        wp_reset_postdata(); // Reset post data to the main loop
    } else {
        // No posts found
        echo 'No posts found';
    }
// }

?>
</section>