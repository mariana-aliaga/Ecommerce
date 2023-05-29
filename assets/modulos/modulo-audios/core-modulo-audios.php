<?php  /*  audio */

function audio_register() {

    $labels = array(
        'name' => _x('Audio', 'post type general name'),
        'singular_name' => _x('audio', 'post type singular name'),
        'add_new' => _x('Agregar audio', 'slideshow_two item'),
        'add_new_item' => __('Agregar audio'),
        'edit_item' => __('Editar audio'),
        'new_item' => __('Nueva audio'),
        'view_item' => __('Ver el audio'),
        'search_items' => __('Buscar audio'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-spotify',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'audio', 'with_front' => false)
      ); 

    register_post_type( 'audio' , $args );
}
add_action('init', 'audio_register');

/*taxonomia de tipo de audio*/
function tipo_audio() {

	register_taxonomy(
		'tipo-audio',
		'audio',
		array(
			'label' => __( 'Tipo de audio' ),
			'rewrite' => array( 'slug' => 'tipo-audio' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'tipo_audio' );
/*taxonomia de tipo de audio*/


/*taxonomia de genero de audio*/
function genero_audio() {

    register_taxonomy(
        'genero-audio',
        'audio',
        array(
            'label' => __( 'Genero de audio' ),
            'rewrite' => array( 'slug' => 'genero-audio' ),
            'hierarchical' => true,
                // Allow automatic creation of taxonomy columns on associated post-types table?
                'show_admin_column'   => true,
                // Show in quick edit panel?
                'show_in_quick_edit'  => true,
        )
    );
}
add_action( 'init', 'genero_audio' );
/*taxonomia de genero de videos*/