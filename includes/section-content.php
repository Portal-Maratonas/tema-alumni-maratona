<!-- Essa parte serve para incluir o conteúdo -->
<?php if(have_posts() ): while( have_posts() ): the_post();?>
<!-- Se tiver posts para a página atual, enquanto tivermos posts, mostre os posts -->

    <?php the_content();?> <!-- Mostrando o conteúdo -->
    <!-- Isto permite editar e criar o conteúdo diretamente pelo WP -->

<?php endwhile; else: endif;?>

<!-- Ess é a seção de conteúdo --> 