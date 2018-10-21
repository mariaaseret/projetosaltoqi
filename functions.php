
<?php
/**
 * POST EVENTOS
 */
function custom_post_type_eventos(){
    register_post_type('eventos', array(
        'lable' => 'Eventos',
        'description' => 'Eventos',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'eventos', 'with_front' => true),
        'query_var' => true,
        'supports' => array ('title', 'editor' , 'page-attributes', 'post-formats', 'custom-fields'),

        'labels' => array (
            'name' => 'Eventos',
            'singular_name' => 'Evento',
            'menu_name' => 'Eventos',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Evento',
            'edit' => 'Editar',
            'edit_item' => 'Editar Evento',
            'new_item' => 'Novo Evento',
            'view' => 'Ver Evento',
            'view_item' => 'Ver Evento',
            'search_items' => 'Procurar Eventos',
            'not_found' => 'Nenhum Evento Encontrado',
            'not_found_in_trash' => 'Nenhum Evento Encontrado no Lixo',
        ),
        //'taxonomies'  => array( 'category' ),     
    ));
    $labels = array(
        'name' => 'Categorias',
        'singular_name' => 'Categoria',
        'search_items' => 'Procurar Categorias',
        'all_items' => 'Todas Categorias',
        'parent_item' => 'Categoria Ascendente',
        'parent_item_colon' => 'Categoria Ascendente:',
        'edit_item' => 'Editar Categoria',
        'update_item' => 'Update Categoria',
        'add_new_item' => 'Adicionar Nova Categoria',
        'new_item_name' => 'Nova Categoria',
        'menu_name' => 'Categorias',
    );
    register_taxonomy('categoria_eventos', array('eventos'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'material-categoria'
        ),
    ));
}
add_action('init', 'custom_post_type_eventos');

//retira o <p> do WYSIWYG
function my_acf_add_local_field_groups() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'my_acf_add_local_field_groups');
/**
 * //POST EVENTOS
 */





/**
 * POST TRABALHE CONOSCO
 */
function custom_post_type_trabalhe_conosco(){
    register_post_type('trabalhe-conosco', array(
        'lable' => 'Trabalhe Conosco',
        'description' => 'Trabalhe Conosco',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'trabalhe-conosco', 'with_front' => true),
        'query_var' => true,
        'supports' => array ('title', 'editor' , 'page-attributes', 'post-formats', 'custom-fields'),

        'labels' => array (
            'name' => 'Trabalhe Conosco',
            'singular_name' => 'Trabalhe Conosco',
            'menu_name' => 'Trabalhe Conosco',
            'add_new' => 'Adicionar Vaga',
            'add_new_item' => 'Adicionar Nova Vaga',
            'edit' => 'Editar',
            'edit_item' => 'Editar Vaga',
            'new_item' => 'Nova Vaga',
            'view' => 'Ver Vaga',
            'view_item' => 'Ver Vaga',
            'search_items' => 'Procurar Vaga',
            'not_found' => 'Nenhuma Vaga Encontrada',
            'not_found_in_trash' => 'Nenhuma Vaga Encontrada no Lixo',
        ),
        //'taxonomies'  => array( 'category' ),     
    ));
}
add_action('init', 'custom_post_type_trabalhe_conosco');

/**
 * //POST TRABALHE CONOSCO
 */



?>