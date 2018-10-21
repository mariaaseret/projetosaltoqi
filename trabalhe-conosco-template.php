<div class="cell small-12 medium-4">
    <div class="card">
        <div class="card-section">
            <h4 class="eventos-titulo"><?php the_title();?></h4>
            <p class="eventos-descricao"><?php the_field('desempenha_vaga'); ?></p>
            <p class="linksProdutos">
                <a data-open="<?php the_field('id_modal'); ?>">Saiba mais <i class="material-icons">arrow_right_alt</i></a>
            </p>
        </div>
    </div>
</div>


<div class="small reveal reveal-release-vagas" id="<?php the_field('id_modal'); ?>" data-reveal data-animation-in="fade-in" data-animation="fade-out" data-reset-on-close="true">
    <button type="button" class="close-button" data-close aria-label="fecha o modal"><span aria-hidden="true">&times;</span></button>
    <div class="grid-x">
        <div class="cell medium-12" style="padding: 0px;">
            <div class="descricao section">
                <h4><?php the_title();?></h4>
                <a id="<?php the_field('id_modal'); ?>" class="registro btn vagas btnAltoqi btnOutline" href="mailto:vagas@altoqi.com.br?subject=<?php the_title(); ?>"><span>Enviar Currículo</span></a>
                <div class="grid-x">
                    <div class="cell medium-6 small-12">
                        <h5>Descrição da Vaga</h5>
                        <p><?php the_field('descricao_vaga'); ?></p>
                        <h5>Jornada</h5>
                        <p><?php the_field('expediente_vaga'); ?></p>
                    </div>
                    <div class="cell medium-6 small-12">
                        <h5>Área</h5>
                        <p><?php the_field('area_vaga'); ?></p>
                        <h5>Benefícios</h5>
                        <p><?php the_field('auxilio_vaga'); ?></p>
                    </div>
                </div>
                <h5>Localização</h5>
                <p><?php the_field('localizacao_vaga'); ?></p>
                <h5>Sobre a função</h5>
                <p><?php the_field('sobre_fucao_vaga'); ?></p>
                <h5>O que desempenha</h5>
                <p><?php the_field('desempenha_vaga'); ?></p>
                <h5>São de responsabilidade do <?php the_field('descricao_vaga'); ?></h5>
                <?php the_field('responsabilidades_vaga'); ?>
                <h5>Requisitos do Candidato</h5>
                <p><?php the_field('requisitos_candidato_vaga'); ?></p>
                <h5>Desejável</h5>
                <?php the_field('desejavel_vaga'); ?>
                <h5>Observações gerais</h5>
                <?php the_field('precisa_vaga'); ?>
            </div>
        </div>
    </div>
</div>