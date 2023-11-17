<!-- Este é o template para a aba de notícias - com todas as notícias juntas -->
<!-- É o template da categoria de Notícias -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo single_cat_title();?></title>

    <?php wp_head();?> 
    <!-- Isso serve para que o WP entenda que isso é o header -->
    
</head>
<body>

<header> 
    <div class="container">
        <?php // Isso coloca a localização do menu no header!
        wp_nav_menu(
            array(
                'theme-location' => 'top-menu',
                //'menu' => 'Top Bar' - Outro jeito de fazer;
                'menu_class' => 'top-bar',
            )
        );
        ?>
    </div>
</header>

<div class="page-wrap">
    <div class='container'>

        <section class="row">
            <div class="col-lg-3 teste1">
                    <?php if(is_active_sidebar('blog-sidebar') ):?>
                        <?php dynamic_sidebar('blog-sidebar');?>
                    <?php endif;?>
            </div>
            <div class="col-lg-9">
                <h1><?php echo single_cat_title();?></h1>
                <!-- Abaixo temos o loop para carregar os posts -->
                <?php get_template_part('includes/section','archive');?>
                <!-- Funções para paginar -->
                <?php previous_posts_link();?>
                <?php next_posts_link();?>
            </div>
        </section>


    </div>
</div>

<?php get_footer();?>