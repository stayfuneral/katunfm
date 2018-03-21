<?php

/*
 * Template Name: Акции и проекты
 */

get_header();

?>



<?php query_posts('cat=2');
while( have_posts() ) : the_post(); ?>

<?php endwhile;
get_footer();