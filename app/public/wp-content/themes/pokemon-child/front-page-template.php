<?php

/*
Template Name: Custom Front Page
*/

get_header();

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        		the_content();
                get_template_part( 'posts-query' );
                ?>
    </main>
</div>

<?php
get_footer();
?>