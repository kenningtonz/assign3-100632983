<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php
            /* translators: Hidden accessibility text. */
            esc_html_e('Skip to content', 'twentytwentyone');
            ?>
        </a>

        <header id="masthead" class="header">
            <div class="branding">
                <div class="site-logo">
                    <?php the_custom_logo(); ?>
                </div>
                <h1 class="site-title">
                    <?php bloginfo('name'); ?>
                </h1>
                <p class="site-description">
                    <?php bloginfo('description'); ?>
                </p>
            </div>

            <!-- taken from twentytwentone header.php -->
            <?php if (has_nav_menu('primary')): ?>
                <nav id="site-navigation" class="primary-navigation"
                    aria-label="<?php esc_attr_e('Primary menu'); ?>">
                    <div class="menu-button-container">
                        <button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list"
                            aria-expanded="false">
                            <span class="dropdown-icon open">
                                <?php esc_html_e('Menu', 'twentytwentyone'); ?>
                                <?php echo twenty_twenty_one_get_icon_svg('ui', 'menu'); ?>
                            </span>
                            <span class="dropdown-icon close">
                                <?php esc_html_e('Close', 'twentytwentyone'); ?>
                                <?php echo twenty_twenty_one_get_icon_svg('ui', 'close');  ?>
                            </span>
                        </button>
                    </div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class' => 'menu-wrapper',
                            'container_class' => 'primary-menu-container',
                            'items_wrap' => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                            'fallback_cb' => false,
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
                <?php
            endif; ?>

        </header><!-- #masthead -->