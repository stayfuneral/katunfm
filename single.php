<?php


get_header();

?>

                   
                        
 

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php get_post(); 
                while( have_posts() ) : the_post();?>
            <h1 class="pt-5"><?php the_title(); ?></h1>

            <?php the_post_thumbnail($size, $attr);?>
            <div class="mt-3">
                <?php the_content();?>
            </div>
            <h6 class="mt-2"><?php edit_post_link();?></h6>
            <?php endwhile; ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar();?>
        </div>
    </div>
            
</div>

<?php get_footer();