<?php

/* Essa função carrega o CSS nas páginas */
function load_css() { 

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    /* Essa parte linka com o nosso arquivo main.css, tem que ficar depois pois queremos que nosoo estilo sobreescreva o estilo dado anteriormente.  */

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

} 
add_action('wp_enqueue_scripts','load_css');


/* Essa função carrega o JS nas páginas */
function load_js() { 
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');


/* Theme Options */
add_theme_support('menus'); /* Permite utilizar as ferramentas de suporte para criação do menu */
add_theme_support('post-thumbnails'); /* Permite adicionar thumbs para os posts. */
add_theme_support('widgets'); /* Indica que queremos suporte para adicionar widgets. */

/* Menus */ 
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location', // O primeiro parâmetro indica o id do menu e o segundo é o nome visual do menu;
        'mobile-menu' => 'Mobile Menu Location',
    )

);


// Tamanhos Personalizados de Imagens:
add_image_size('blog-larg', 800, 400, true); 
add_image_size('blog-small', 300, 200, true); 

/* true e false determinar algo sobre o corte da imagem. */



// Registrando mais uma localização: SideBars
function my_sidebars() {

    register_sidebar( /* Essa função adiciona uma localização. */

            array(

                'name' => 'Page Sidebar', 
                'id' => 'page-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'

            )
    );

    register_sidebar( /* Essa função adiciona uma localização. */

        array(

            'name' => 'Blog Sidebar', 
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
);


}
add_action('widgets_init', 'my_sidebars'); 



function my_first_post_type() 
{

    $args = array(
        'labels' => array(
            'name' => 'Ofertas',
            'singular_name' => 'Oferta',
        ),
        // hierarchical => true, (Serve para transformar em página);
        'menu_icon' => 'dashicons-megaphone',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')

    );

    register_post_type('oferta', $args);

}
add_action('init', 'my_first_post_type');


function my_first_taxonomy() {


    $args = array(
        'labels' => array(
            'name' => 'Palestras',
            'singular_name' => 'Palestra',
        ),
        'public' => true,
        'hierarchical' => false,

    );

    register_taxonomy('palestras', array('oferta'), $args);
}
add_action('init', 'my_first_taxonomy');
