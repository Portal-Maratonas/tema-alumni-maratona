<!-- Este arquivo é o template de apenas um post / notícia -->

<?php get_header();?>

<div class="page-wrap">
    <div class='container'>

        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif;?>

        <!-- Com o comando dentro da url() podemos determinar o corte da imagem que queremos usar. -->

    
        <div class="row">
            <div class="col-lg-6">
                <h1> <?php the_title();?> </h1>
                <?php get_template_part('includes/section','oferta');?>
                <?php wp_link_pages();?>
            </div>
            <div class="col-lg6">
                <ul>
                    <?php if(get_post_meta($post->ID, 'Anunciante', true)):?> 
                    <li> Anunciante: <?php echo get_post_meta($post->ID, 'Anunciante', true);?> </li>
                    <?php endif;?>
                    <?php if(get_post_meta($post->ID, 'Data', true)):?> 
                        <li> Data: <?php echo get_post_meta($post->ID, 'Data', true);?> </li>
                    <?php endif;?>

                </ul>
            </div>
        </div>
    
    </div>
</div>

<?php get_footer();?>
