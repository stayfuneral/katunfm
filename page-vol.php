<?php

/*
 * Template Name: Архив программы "Год волонтёра"
 * Данная страница отвечает за вывод постов из рубрики "Год волонтёра" (раздел "Программы")
 */

get_header();

?>

                   

 
<div class="container">
    <div class="row mt-3">
        
    <?php query_posts('cat=6');
        while( have_posts() ) : the_post(); ?>
        
        <div class="col-md-4">
            <div class="mt-2 mb-2"><?php the_date();?></div>
            <?php the_post_thumbnail($prog_size, $prog_class);?>
            <h3 class="mt-3"><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h3>
            <?php the_content('<button class="btn btn-outline-info text-uppercase mt-3 mb-3">Слушать запись</button>');?>
            <h6 class="mt-2"><?php edit_post_link();?></h6>
        </div>
    <?php endwhile; ?>    
    </div>
    
    
</div>

<?php
get_footer();
