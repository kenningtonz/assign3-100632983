<?php
/*
Template Name: Page with Title
*/

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main pokemon-default" role="main">
        <h1 class="page-title"> <?php the_title(); ?></h1>
        <?php the_content(); ?>
    </main>
</div>

<?php
get_footer();
?>