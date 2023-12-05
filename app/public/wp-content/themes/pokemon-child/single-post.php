<?php
/*
Template part for displaying post content
*/

get_header();
?>
<div id="primary" class="content-area">
    <main id="main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single-content">
        <div class="single-image">
            <?php the_post_thumbnail('full', array('class' => 'alignfull'));
            ?>
        </div>
        <?php
        the_content();
        ?>
    </div>
</article>
    </main>
</div>

<?php
get_footer();
?>