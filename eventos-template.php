<!-- EVENTOS-->
<?php if( strip_tags(get_the_term_list(get_the_ID(), 'categoria_eventos')) != 'destaque'){ //evento comum ?>
<div class="cell small-12 medium-6">
    <div class="card">
        <div class="card-divider card-divider_eventos" style="background-image: url(<?php echo $url; ?>); background-repeat: no-repeat; background-size: cover;">
            <div class="card-divider_eventos--overlay  evento-<?php echo strip_tags(get_the_term_list(get_the_ID(), 'categoria_eventos')); ?>">
                <h4 class="eventos-titulo"><?php the_title();?></h4>
            </div>
        </div>
        <div class="card-section">
            <h4 class="eventos-data"><?php echo ucfirst(utf8_encode(strftime('%A', $time)));?> <?php echo $d;?>/<?php echo $m;?>, às  <?php the_field('horario_evento'); ?></h4>
            <p class="eventos-descricao"><?php echo $descricao; ?></p>
            <a class="btn btn-success btnVerde-outline" href="<?php the_field('botao_evento'); ?>" target="_blank">Inscreva-se</a>
        </div>
    </div>
</div>
<?php }else{ //evento destaque?>
<div class="cell small-12">
    <div class="card card-destaque">
        <div class="grid-x">
            <div class="cell small-12 large-6">
                <div class="card-divider card-divider_eventos" style="background-image: url(<?php echo $url; ?>); background-repeat: no-repeat; background-size: cover;">
                    <div class="card-divider_eventos--overlay"></div>
                </div>
            </div>
            <div class="cell small-12 large-6">
                <div class="card-section">
                    <h4 class="eventos-titulo"><?php the_title();?></h4>
                    <h5 class="eventos-data"><?php echo ucfirst(utf8_encode(strftime('%A', $time)));?> <?php echo $d;?>/<?php echo $m;?>, às  <?php the_field('horario_evento'); ?></h5>
                    <p class="eventos-descricao"><?php echo $descricao; ?></p>
                    <a class="btn btn-success btnVerde-outline" href="<?php the_field('botao_evento'); ?>" target="_blank">Conheça</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!--// EVENTOS-->