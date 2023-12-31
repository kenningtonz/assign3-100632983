<?php
/**
 * The template for displaying the footer
 */
?>
<footer class="footer">
    <div class="site-logo">
        <?php the_custom_logo(); ?>
        <?php bloginfo('name'); ?>
    </div>
    <!-- taken from twentytwentone footer.php -->
    <?php if (has_nav_menu('footer')): ?>
        <nav aria-label="<?php esc_attr_e('Secondary menu'); ?>">
            <ul class="footer-navigation-wrapper">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'items_wrap' => '%3$s',
                        'container' => false,
                        'depth' => 1,
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                        'fallback_cb' => false,
                    )); ?>
            </ul>
        </nav>
    <?php endif; ?>
    
    <p>Copyright 2023</p>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>

