<?php
/*
 * Главная страница шаблона темы для радиостанции Катунь FM
 */
get_header();

 ?>


 
<div class="container">
    <?php query_posts('cat=2');
        while( have_posts() ) : the_post(); ?>
    <h1 class="pt-5"><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h1>
    
    <?php the_post_thumbnail($action_size, $attr);?>
    <div class="mt-3">
        <?php the_content();?>
    </div>
    <h6 class="mt-2"><?php edit_post_link();?></h6>
    <?php endwhile; ?>
</div>


         

<?php get_footer();