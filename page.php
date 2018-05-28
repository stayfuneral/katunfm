<?php


get_header();

?>

                   
 
<div class="container">

            <?php while( have_posts() ) : the_post(); ?>
            <h1 class="pt-5"><?php the_title(); ?></h1>
            <h6 class="mt-2"><?php edit_post_link();?></h6>
            <?php the_post_thumbnail($size, $attr);?>
            <div class="mt-3">
                <?php the_content();?>
            </div>
            <?php endwhile; ?>       
</div>


<?php get_footer();
