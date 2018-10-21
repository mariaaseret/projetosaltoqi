
<?php

/*

  Template Name: Trabalhe Conosco

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
                <div class="cell small-12 chamada">
                    <h2 class="text-center">Trabalhe conosco</h2>
                    <p>Sabemos que a carreira é parte fundamental de nossas vidas. Afinal, é através dela que realizamos sonhos e transformamos as relações humanas de diversas formas. Por isso, é tão importante amar o que se faz.
                        <br/><br/>
                        Nós da AltoQi desejamos que você seja parte deste time e nos inspire com novas ideias. Acreditamos, acima de tudo, que um bom trabalho resulta do otimismo de toda a equipe.</p>
                </div>
            </div>
            <div id="eventos-lista" class="">
                <div class="grid-x altoqi-grid" id="divVagas">
                    <div class="cell small-12">
                        <div class="grid-x">
                            <?php 
                            $wpb_all_query = new WP_Query(array('post_type'=>'trabalhe-conosco', 'post_status'=>'publish', 'posts_per_page'=>-1 , 'order' => 'ASC')); ?>
                            <?php if ( $wpb_all_query->have_posts() ) : 
                            setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');
                            mb_internal_encoding('UTF8');
                            mb_regex_encoding('UTF8');
                            while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
                                include (TEMPLATEPATH."/trabalhe-conosco-template.php");
                            endwhile; 
                            wp_reset_postdata(); ?>
                            <?php else : ?>
                            <div class="cell small-12">
                                <h2 class="text-center">Não há vagas no momento :( </h2>
                            </div>
                            <?php endif; ?>
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