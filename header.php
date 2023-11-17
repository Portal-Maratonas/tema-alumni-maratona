<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php the_title();?> </title>

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
    