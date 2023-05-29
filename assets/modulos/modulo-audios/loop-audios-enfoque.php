<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/spotify/assets/modulos/modulo-audios/modulo-audios.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="seccion-cinco container mt-5 mb-5 d-flex">

    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page = -1; // -1 shows all posts
            $args = array(
                'post_type' => 'audio',
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                'tax_query'=>array(
                    array(
                        'taxonomy' =>'genero-audio',
                        'field'=>'slug',
                        'terms'=> 'enfoque',
                    ),
                )
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <div class="card carta">
       <?php spotify_post_thumbnail(); ?>
        <div class="card-body">
            <h5 class="card-title text"><?php the_title();?></h5>
            <p class="card-text"><?php the_excerpt();?></p>
        </div>
    </div>

    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>




</section>
<!------seccion contacto---->