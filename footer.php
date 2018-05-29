<?php wp_footer(); ?>

<footer class="bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="pt-3">&copy; <?php bloginfo('name');?> 2011-<?php echo date('Y') ?>.
						<h5>Email: info@katunfm.ru.<br />
						Телефон: (3852)652-207</h5>
                        
                        <?php //wp_nav_menu([
                            //'theme_location'    => 'footer_menu',
                            //'container'         => FALSE,
                            //'menu class'        => 'nav ml-auto',
                            //'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        //]);?>
                        
                        <p class="text-white">
                            <a class="p-1" href="https://vk.com/katun_fm" target="_blank"><i class="fab fa-vk"></i></a>
                            <a class="p-1" href="https://www.facebook.com/katunfm" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="p-1" href="https://ok.ru/katunfm" target="_blank"><i class="fab fa-odnoklassniki"></i></a>
                            <a class="p-1" href="https://www.instagram.com/katunfm" target="_blank"><i class="fab fa-instagram"></i></a>
                        </p>
                    </div>
                    <!--
                    <div class="col-md-6 col-lg-6">
                        <h3 class="pt-3">Напишите нам</h3>
                        <?php // echo do_shortcode('[contact-form-7 id="5"]'); ?>
                    </div>
					-->
                </div>
                    
                
            </div>
       
            
        </footer>

    </body>
</html>

