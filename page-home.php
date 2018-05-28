<?php
/*
 * Template Name: Главная страница
 */
get_header();

 ?>


<?php echo do_shortcode('[metaslider id="196"]'); ?>
    <div class="container mx-auto mt-2 mb-2">
        <div class="row">
            <div class="col-md-9">
                
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/uVaOf_OvM6w?rel=0&amp;showinfo=0" width="300" height="150" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
                
                <h1 class="m-5 text-center"><strong>Наши программы</strong></h1>
                
                <div class="row">
                    <?php query_posts('posts_per_page=3', 'cat=3,5,6,7,12');
                    while( have_posts() ) : the_post(); ?>
                    <div class="col-md-4">
                        <div class="card border-0 mb-5">
                            <div class="mt-2 mb-2"><?php the_date();?></div>
                            <?php the_post_thumbnail($prog_size, $prog_class);?>
                            <h3 class="mt-2 card-title"><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h3>
                            <?php the_content('<button class="btn btn-outline-info text-uppercase mt-3 mb-3">Слушать запись</button>');?>
                            
                            <h6 class="mt-2"><?php edit_post_link();?></h6>
                        </div>
                    </div>
                    <?php endwhile;?>
                   
                        <button class="btn btn-lg btn-dark text-uppercase mb-5 mx-auto"><a class="text-white" href="<?php echo get_permalink(38); ?>">Все программы</a></button>
                        
                            
                            
                </div>
                <div class="row">
                    <?php
                        $postID = 17;
                        $post = get_post($postID);
                        
                        ?>
                        <h1 class="m-5 text-center mx-auto"><strong><?php echo $post->post_title;?></strong></h1>
                        <?php echo $post->post_content;?>
                    
                </div>
                
            </div>
            <div class="col-md-3">
                
                <?php get_sidebar();?>
                
            </div>
        </div>
        
    </div>
          
            
            

<?php get_footer();