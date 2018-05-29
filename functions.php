<?php

// функции темы

//подключение стилей и скриптов
function katunfm_scripts() {
    wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'katunfm-style', get_stylesheet_uri() );
    wp_enqueue_script('all', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array('jquery'), NULL, TRUE);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), NULL, TRUE);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), NULL, TRUE);
}

add_action('wp_enqueue_scripts', 'katunfm_scripts');

//регистрация меню
//add_theme_support('menus');

add_action('after_setup_theme', function(){
	register_nav_menus([
                'primary' => 'Главное шапке',
				'footer_menu' => 'Меню в подвале'
                ] );
});

// Добавление возможности загружать свой логотип
add_theme_support('custom-logo');

//Регистрация виджетов в сайдбаре
add_theme_support('widgets');

add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => sprintf(__('Сайдбар'), $i ),
		'id'            => "sidebar-$i",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="mt-2 mb-2 mx-auto">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2>',
		'after_title'   => "</h2>\n",
	) );
}

// Добавление миниатюры записей и страниц
add_theme_support( 'post-thumbnails', ['post', 'page'] );
$action_size = 'full';

$attr = array(
    'class' => 'img-fluid'
);

$slide_img = array(
    'class' => 'd-block w-100'
);

$prog_size = 'full';
$prog_class = [
    
    'class' => 'card-img-top img-fluid'
   ];

//Добавление класса .nav-link к ссылкам из пунктов верхнего меню
function add_class_to_all_menu_anchors( $atts ) {
    $atts['class'] = 'nav-link';
 
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );


add_theme_support('title-tag'); // выводит title страницы в функции wp_head

add_filter( 'document_title_separator', function(){ return ' | '; } ); // замена разделителя в title



function katunfm_register_required_plugins() {[
   
    /*  Уведомление об обязательной установке плагина Contact Form 7
     *  Обязательно нужно зайти в файл contact-form-7/modules/textarea.php и в параметре get_rows_option сменить значение с 10 на 3
     *  При обновлении данного плагина вбить значение заново 
    */
        'name'      =>  'Contact Form 7',
        'slug'      =>  'contact-form-7',
        'source'    =>  'https://downloads.wordpress.org/plugin/contact-form-7.5.0.1.zip',
        'required'  =>  TRUE
];
    
    
    /*  Уведомление об обязательной установке плагина Compact WP Audio Player
     *  Данный плагин отвечает за трансляцию аудио на сайт.
     *  По желанию можно поменять кнопки play и pause. Для этого есть 2 способа:
     * 1. дать новым изображениям кнопок те же имена
     * 2. залезть в файл compact-wp-audio-player/css/player.css и отредактировать классы .sc_player_container1 .myButton_play (кнопка PLAY) и .sc_player_container1 .myButton_stop (кнопка PAUSE).
     * Также при необходимости задать иные размеры изображения (в этих же классах)
    */
    [
        'name'      =>  'Compact Audio Player',
        'slug'      =>  'compact-wp-audio-player',
        'source'    =>  'https://downloads.wordpress.org/plugin/compact-wp-audio-player.zip',
        'required'  =>  TRUE
    ];
    
    
    /*
     * Уведомление об обязательной установке плагина WP Translitera для создания ЧПУ 
     */
    [
        'name'      =>  'WP Translitera',
        'slug'      =>  'wp-translitera',
        'source'    =>  'https://downloads.wordpress.org/plugin/wp-translitera.p1.2.4.zip',
        'required'  =>  TRUE
        
    ];
    
    
    /*
     * Уведомление об обязательной установке плагина MetaSlider.
     * Без него не получится выводить на главную страницу баннеры с акциями.
     * Да и вообще, слайдер полезная штука, много где пригодиться может
     */
    [
        'name'      =>  'MetaSlider',
        'slug'      =>  'ml-slider',
        'source'    =>  'https://downloads.wordpress.org/plugin/ml-slider.3.7.1.zip',
        'required'  =>  TRUE
    ];
}
