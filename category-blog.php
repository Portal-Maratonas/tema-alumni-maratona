<!-- Se houver uma página específica para uma categoria, o WP carrega ela automaticamente para a página que representa essa categoria --> 

<!-- Este é o template para a aba de notícias - com todas as notícias juntas -->
<!-- É o template da categoria de Notícias -->
<?php get_header();?>


<div class="page-wrap">

    <div class='container'>
        <h1><?php echo single_cat_title();?></h1>
        <p>Essa é uma página de exemplo. </p>
        <?php get_template_part('includes/section','archive');?>

        <?php previous_posts_link();?>
        <?php next_posts_link();?>

    </div>
</div>

<?php get_footer();?>