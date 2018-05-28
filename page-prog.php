<?php
/*
 * Template Name: Наши программы
 */
get_header();

 ?>

<div class="container">
    <h1 class="pt-5 text-center"><?php the_title();?></h1>
    
    <script type="text/javascript">
        $('#myTab a[href="#bc"]').tab('show'); // Select tab by name
        $('#myTab a[href="#vol"]').tab('show'); // Select tab by name
        $('#myTab a[href="#auto"]').tab('show'); // Select tab by name
        $('#myTab a[href="#week"]').tab('show'); // Select tab by name
        $('#myTab a[href="#etc"]').tab('show'); // Select tab by name
    </script>
    
    <div class="tabs">
        <ul class="nav nav-tabs">
            <li class="nav-item active"><a href="#bc" class="nav-link active" data-toggle="tab">Бизнес-класс</a></li>
            <li class="nav-item"><a href="#vol" class="nav-link" data-toggle="tab">Год волонтёра</a></li>
            <li class="nav-item"><a href="#auto" class="nav-link" data-toggle="tab">Автоклуб</a></li>
            <li class="nav-item"><a href="#week" class="nav-link" data-toggle="tab">Неделя</a></li>
            <li class="nav-item"><a href="#etc" class="nav-link" data-toggle="tab">Прочие программы</a></li>
        </ul>
        
        
        <div class="row tab-content">
            <div id="bc" class="tab-pane p-5 active">
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/img/business-class.png" alt="" class="img-fluid" /></div>
                    <div class="col-md-8 p-2">
                        <h2>Бизнес-класс</h2>
                        <p>Программа о том как начать свой бизнес и развивать его. Выходит по понедельникам и средам в 16.30  Ведущая Анастасия Воробьева.</p>
                        
                    </div>
                </div>
                <?php query_posts('cat=5');
                while (have_posts() ) : the_post(); ?>
                <div class="row p-1">
                    
                    
                <div class="col-12 mt-2"><h3><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3></div>
                    
                <div class="col-12"><h5>Запись эфира от <?php the_date();?></h5></div>
                <div class="col-12">
                    <?php the_content('<div class="mt-1"><button class="btn btn-outline-info text-uppercase mt-3 mb-3">Слушать запись</button></div>');?>
                </div>
                    
                    
                </div>
                <?php endwhile;?>
            </div>
            
            <div id="vol" class="tab-pane p-5">
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/img/volunteer.png" alt="" class="img-fluid" /></div>
                    <div class="col-md-8 p-2">
                        <h2>Год волонтёра</h2>
                        <p>Анастасия Бодрова знакомит слушателей с волонтерским движением Алтайского края. Программа посвящена Году Волонтерства в России.</p>
                        
                    </div>
                </div>
                <?php query_posts('cat=6');
                while (have_posts() ) : the_post(); ?>
                <div class="row p-1">
                    
                    
                    <div class="col-12  mt-2">
                        <h3><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                    </div>
                    
                    <div class="col-12">
                        <h5>Запись эфира от <?php the_date();?></h5>
                    </div>
                    <div class="col-12">
                        <?php the_content('<button class="btn btn-outline-info text-uppercase mt-3 mb-3">Слушать запись</button>');?>
                    </div>
                    
                    
                </div>
                <?php endwhile;?>
            </div>
            
            <div id="auto" class="tab-pane p-5">
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/img/autoclub.png" alt="" class="img-fluid" /></div>
                    <div class="col-md-8 p-2">
                        <h2>Автоклуб</h2>
                        <p>По вторникам и четвергам в 16.30 Глеб Полянский говорит о дорогах, вождении и ПДД.</p>
                        
                    </div>
                </div>
                <?php query_posts('cat=7');
                while (have_posts() ) : the_post(); ?>
                <div class="row p-1">
                    <div class="col-12  mt-2">
                        <h3><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                    </div>
                    <div class="col-12">
                        <h5>Запись эфира от <?php the_date();?></h5>
                    </div>
                    <div class="col-12">
                        <?php the_content('<button class="btn btn-outline-info text-uppercase mt-3 mb-3">Слушать запись</button>');?>
                    </div>
                    
                    
                </div>
                <?php endwhile;?>
            </div>
            
            <div id="week" class="tab-pane p-5">
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/img/week.png" alt="" class="img-fluid" /></div>
                    <div class="col-md-8 p-2">
                        <h2>Неделя</h2>
                        <p>Итоговая информационная программа с мнением экспертов. В эфире по субботам в 13-30 и 19-30. Ведущая Татьяна Ветрова.</p>
                        
                    </div>
                </div>
                <?php query_posts('cat=12');
                while (have_posts() ) : the_post(); ?>
                <div class="row p-1">
                    <div class="col-12  mt-2">
                        <h3><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                    </div>
                    
                    <div class="col-12">
                        <h5>Запись эфира от <?php the_date();?></h5>
                    </div>
                    <div class="col-12">
                        <?php the_content('<button class="btn btn-outline-info text-uppercase mt-3 mb-3">Слушать запись</button>');?>
                    </div>
                    
                    
                </div>
                <?php endwhile;?>
            </div>
            
            <div id="etc" class="tab-pane p-1">
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/img/volunteer.png" alt="" class="img-fluid" /></div>
                    <div class="col-md-8 p-2">
                        <h2>Прочие программы</h2>
                        <p>Самые яркие и интересные эфиры наших программ, не включённые в вышеупомянутые рубрики</p>
                        
                    </div>
                </div>
                <?php query_posts('cat=13');
                while (have_posts() ) : the_post(); ?>
                <div class="row p-1">
                    <div class="col-12  mt-2">
                        <h3><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                    </div>
                    <div class="col-12">
                        <h5>Запись эфира от <?php the_date();?></h5>
                    </div>
                    <div class="col-12">
                        <?php the_content('<button class="btn btn-outline-info text-uppercase mt-3 mb-3">Слушать запись</button>');?>
                    </div>
                    
                    
                </div>
                <?php endwhile;?>
            </div>
            
        </div>
        
    </div>
    
    <h1 class="pt-1 pb-2 text-center">Другие программы</h1>
    <div class="row p-2">
        <div class="col-12">
            <h3>Новости</h3>
            <p>Каждый час с 7 утра до 8 вечера самые актуальные события Алтайского края</p>
        </div>
        
    </div>
    <div class="row p-2">
        <div class="col-12">
            <h3>Приветливое настроение</h3>
            <p>По будням с 13 до 14 часов передаем Ваши приветы и поднимаем настроение любимыми хитами!</p>
        </div>
        
    </div>
    <div class="row p-2">
        <div class="col-12">
            <h3>Подъёмная сила</h3>
            <p>Каждый будний день с 8 до 10 утра Евгений Калашников, Дмитрий Борецкий и Анастасия Бодрова настраивают жителей Алтайского края на позитивный и энергичный день!</p>
        </div>
        
    </div>
    <div class="row p-2">
        <div class="col-12">
            <h3>Время выбирать</h3>
            <p>Программа о том, как проходит избирательная компания. В эфире по четвергам в 12-30 и 18-30. Ведущая Татьяна Ветрова.</p>
        </div>
        
    </div>
    <div class="row p-2">
        <div class="col-12">
            <h3>Дорожное движение</h3>
            <p>Каждые полчаса в эфире "Катунь-FM" самая актуальная информация о дорожной ситуации в краевой столице!</p>
        </div>
        
    </div>
    <div class="row p-2">
        <div class="col-12">
            <h3>Дело вкуса</h3>
            <p>Алексей Кочубеев в 15.30 предлагает слушателям несколько интересных событий в краевой столице</p>
        </div>
        
    </div>
    <div class="row p-2">
        <div class="col-12">
            <h3>Техногид</h3>
            <p>Алексей Кочубеев делится новостями из мира гаджетов и современных технологий. По вторникам и четвергам в 7:30 и 14:30</p>
        </div>
        
    </div>

    
</div>

            
           
            
            
            <center>
                <button class="btn btn-lg btn-dark text-uppercase mb-5"><a class="text-white" href="<?php echo get_permalink(38); ?>">Все программы</a></button>
            </center>

<?php get_footer();
