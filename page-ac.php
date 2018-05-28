<?php

/*
 * Template Name: Архив программы "Автоклуб"
 * Данная страница отвечает за вывод постов из рубрики "Автоклуб" (раздел "Программы")
 */

get_header();

?>

                   

 
<div class="container">
    <div class="row mt-3">
        <div class="col-md-9">
            <?php query_posts('cat=7');
            while( have_posts() ) : the_post(); ?>
            <div class="mt-2 mb-2"><?php the_date();?></div>
            <?php the_post_thumbnail($prog_size, $prog_class);?>
            <h3 class="mt-3"><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h3>
            <?php the_content('<button class="btn btn-outline-info text-uppercase mt-3 mb-3">Слушать запись</button>');?>
            <h6 class="mt-2"><?php edit_post_link();?></h6>
            <?php endwhile; ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar();?> 
        </div>

    
    </div>
    
    
</div>

<?php
get_footer();
