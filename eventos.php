
<?php

/*

  Template Name: Eventos

 */

?>

<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php // get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->

<div class="grid-x dmbs-content">

    <?php //left sidebar ?>

    <?php // get_sidebar('left'); ?>

    <div class="cell small-12 dmbs-main">
        <div id="home_4" class="homeFundoBranco">
            <div class="grid-x altoqi-grid divComEspaco">
                <!-- INÍCIO CHAMADA DESKTOP -->
                <div class="cell small-12 text-center chamada">
                    <h2>Webinars, fóruns e feiras</h2>
                    <p>A AltoQi está presente nos maiores eventos do setor de engenharia no Brasil, como congressos, fóruns e feiras. Além disso, realiza webinars sobre o mercado de construção e dicas para o desenvolvimento de projetos, com total interação entre os palestrantes e participantes. Confira nossa agenda de eventos.</p>
                </div>
            </div>
            <div id="eventos-lista" class="">
                <div class="grid-x altoqi-grid" id="divEventos">
                    <div class="cell small-12">
                        <div class="grid-x">
                            <?php 
                            $wpb_all_query = new WP_Query(array('post_type'=>'eventos', 'post_status'=>'publish', 'posts_per_page'=>-1 ,  'orderby'   => 'meta_value', 'meta_key' => 'data_evento', 'order' => 'ASC')); ?>
                            <?php if ( $wpb_all_query->have_posts() ) : 
                            setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');
                            mb_internal_encoding('UTF8');
                            mb_regex_encoding('UTF8');
                            while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
                            if(strip_tags(get_the_term_list(get_the_ID(), 'categoria_eventos')) == 'destaque'){ 
                                $image = get_field('imagem_evento');
                                $url = $image['url'];
                                $descricao = get_field('descricao_evento');
                                $date = get_field('data_evento');
                                // extraindo dia (D), mês (M) e ano (Y)
                                $d = substr($date, 6, 2);
                                $m = substr($date, 4, 2);
                                $y = substr($date, 0, 4);
                                $time = strtotime("{$d}-{$m}-{$y}");
                                include (TEMPLATEPATH."/eventos-template.php");
                            } endwhile; 
                            wp_reset_postdata(); ?>
                            <?php else : ?>
                            <div class="cell small-12">
                                <h2 class="text-center">Não há eventos no momento.</h2>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="grid-x">
                            <?php 
                            $wpb_all_query = new WP_Query(array('post_type'=>'eventos', 'post_status'=>'publish', 'posts_per_page'=>-1, 'orderby'   => 'meta_value', 'meta_key' => 'data_evento',  'order' => 'ASC')); ?>
                            <?php if ( $wpb_all_query->have_posts() ) : 
                            setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');
                            mb_internal_encoding('UTF8');
                            mb_regex_encoding('UTF8');
                            while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
                            if(strip_tags(get_the_term_list(get_the_ID(), 'categoria_eventos')) != 'destaque'){ 
                                $image = get_field('imagem_evento');
                                $url = $image['url'];
                                $descricao = get_field('descricao_evento');
                                $date = get_field('data_evento');
                                $d = substr($date, 6, 2);
                                $m = substr($date, 4, 2);
                                $y = substr($date, 0, 4);
                                $time = strtotime("{$d}-{$m}-{$y}");
                                include (TEMPLATEPATH."/eventos-template.php");
                            }
                            endwhile; 
                            wp_reset_postdata(); 
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php //get the right sidebar ?>

<?php // get_sidebar('right'); ?>

</div>

<!-- end content container -->

<?php get_footer(); ?>