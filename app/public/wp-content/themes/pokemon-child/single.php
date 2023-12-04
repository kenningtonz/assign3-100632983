<?php
/*
Template part for displaying post content

*/

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="single-content">
<div class="single-image">
    <?php the_post_thumbnail( 'full', array( 'class' => 'alignfull' ) );
?>
</div>
    <?php
    the_content();
    ?>
</div>

</article><!-- #post-<?php the_ID(); ?> -->


<?php
get_footer();
?>

