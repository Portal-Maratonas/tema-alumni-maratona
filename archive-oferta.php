<!-- Este é o template para a aba de notícias - com todas as notícias juntas -->
<!-- É o template da categoria de Notícias -->
<?php get_header();?>

<div class="page-wrap">
    <div class='container'>

            <div class="col-lg-9">
                <h1><?php echo single_cat_title();?></h1>
                <!-- Abaixo temos o loop para carregar os posts -->
                <?php get_template_part('includes/section','archive');?>
                <!-- Funções para paginar -->
                <?php previous_posts_link();?>
                <?php next_posts_link();?>
            </div>


    </div>
</div>

<?php get_footer();?>