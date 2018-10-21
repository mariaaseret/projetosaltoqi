<li class="downloadList-item">
    <div class="row">
        <div class="col-md-1 downloadList-item--subitem downloadList-item--subitem_versao">2018</div>
        <div class="col-md-3 downloadList-item--subitem">Windows 10 | 8.1 - 64 bits</div>
        <div class="col-md-2 downloadList-item--subitem">Versão completa</div>
        <div class="col-md-1 downloadList-item--subitem"><a onclick="$('#release2018full_eberick').modal();">Release</a></div>
        <div class="col-md-2 downloadList-item--subitem">2018-02</div>
        <div class="col-md-1 downloadList-item--subitem">365 Mb</div>
        <div class="col-md-2">
            <?php

            if (is_user_logged_in()) {

                global $current_user;

                $current_user = wp_get_current_user();

                $user_info = get_userdata($current_user->ID);

                $first_name = $user_info->first_name;

            ?>
            <a id="258" class="registro btn btn-success form-control btnOutline" href="/download/eberick/Eberick_V11_2018-02.exe" onclick="registra_download($285)">Download</a>
            <?php } else {
            ?>
            <a class="registro btn btn-success form-control btnOutline" href="http://login.altoqi.com.br/?return_to=http://www.altoqi.com.br/downloads">Fazer login</a>
            <?php }
            ?>
        </div>
    </div>
</li>



<div class="modal modal-release fade" id="release2018full_eberick" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <!--<a class="next-modal" onclick="$('#lancamentoDescidas').modal();" data-dismiss="modal"><i class="material-icons">&#xE315;</i></a>-->
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- INÍCIO DESCRIÇÃO MODAL -->
                <div class="row">
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="descricao">
                            <h4>Software 2018 <span>- Instalação Completa - 2018-02</span></h4>
                            <?php

                            if (is_user_logged_in()) {

                                global $current_user;

                                $current_user = wp_get_current_user();

                                $user_info = get_userdata($current_user->ID);

                                $first_name = $user_info->first_name;

                            ?>
                            <a id="258" class="registro btn btn-success form-control btnOutline" href="/download/eberick/Eberick_V11_2018-02.exe">Download</a>
                            <?php } else {
                            ?>
                            <a class="registro btn btn-success form-control btnOutline" href="http://login.altoqi.com.br/?return_to=http://www.altoqi.com.br/downloads">Fazer login</a>
                            <?php }
                            ?>
                            <h4>Descrição</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Vivamus porttitor turpis ac leo. In dapibus augue non sapien. Aliquam erat volutpat. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Pellentesque arcu. Vestibulum fermentum tortor id mi. Mauris tincidunt sem sed arcu.</p>
                            <h4>Modificações</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Vivamus porttitor turpis ac leo. In dapibus augue non sapien. Aliquam erat volutpat. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Pellentesque arcu. Vestibulum fermentum tortor id mi. Mauris tincidunt sem sed arcu.</p>
                            <h4>Mais informações</h4>
                            <p>Se precisar de mais informações entre em contato com o Departamento de Suporte através do e-mail <a href="mailto=">Lorem ipsum dolorr</a> ou por telefone <strong>(00) 0000 0000.</strong></p>
                        </div>
                    </div>
                </div>
                <!-- //FINAL DESCRIÇÃO MODAL -->
            </div>
        </div>
    </div>
</div>