<?php
/*
Template Name: Custom Page
*/

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main pokemon-default" role="main">
        <?php the_content(); ?>
    </main>
</div>

<?php
get_footer();
?>