<!-- Este arquivo é o template de apenas um post / notícia -->

<?php get_header();?>

<div class="page-wrap">
    <div class='container'>

        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif;?>

        <!-- Com o comando dentro da url() podemos determinar o corte da imagem que queremos usar. -->

    
        <h1> <?php the_title();?> </h1>
        <?php get_template_part('includes/section','blogcontent');?>

        <?php wp_link_pages();?>
    
    </div>
</div>

<?php get_footer();?>
