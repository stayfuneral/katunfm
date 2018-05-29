<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a href="<?php get_home_url();?>" class="navbar-brand">
                    <?php the_custom_logo();?></a>

            <a class="title-head" href="<?php echo get_home_url();?>" class="navbar-brand"><span class="ml-3">Катунь 88,7FM</span></a>
                
            <!-- Плагин Compact WP Audio Player - отвечает за трансляцию радио на сайте -->
            <!--
			<div class="ml-3 mr-3">
                <?php // echo do_shortcode( '[sc_embed_player volume="70" fileurl="http://air.radiorecord.ru:8102/tm_320??ab=1453400925&radioson.mp3"]' ); ?>
            </div>
           -->

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!--
                <i class="fas fa-align-justify"></i>
                -->
                <span class="navbar-toggler-icon"></span>
                
               

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Главное меню -->
                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => FALSE,
                    'menu_class'     => 'navbar-nav ml-auto',
                    'items_wrap'     => '<ul class="%2$s"><li class="nav-item"><a class="nav-link">%3$s</a></li></ul>',
                    ]
                );?>
                
                <button class="btn btn-info text-uppercase"><a class="text-white" href="https://vk.com/katun_fm?w=app5708398_-104925846" target="_blank">Заказать песню</a></button>
            </div>
        </nav>