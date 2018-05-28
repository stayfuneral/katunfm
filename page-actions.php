<?php

/*
 * Template Name: Акции и проекты
 */

get_header();

?>

<div class="col-md-9">
        <?php query_posts('cat=2');
while( have_posts() ) : the_post(); ?>

<?php endwhile; ?>    
</div>
<div class="col-md-3">
            <?php get_sidebar();?>
</div>

<?php get_footer();