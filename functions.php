<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles',99 );
function enqueue_parent_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style( 'blog-style', get_stylesheet_directory_uri().'/blog.css');
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri().'/main.js', array('jquery'),  '3.5', true );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/js/libs/slickjs/slick.min.js', array ( 'jquery' ), 3.5, true);
}



// ACF 5.9.1 PRO
add_action('acf/init', 'my_acf_init');
function my_acf_init() {

    // check function exists
    if( function_exists('acf_register_block') ) {

        // register a blocks
        acf_register_block(array(
            'name'				=> 'hero-block',
            'title'				=> __('Hero block'),
            'description'		=> __('Hero block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'hero', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'logo-slider',
            'title'				=> __('Logo slider'),
            'description'		=> __('Logo slider'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'technos-block', 
            'title'				=> __('Technos block'),
            'description'		=> __('Technos block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'projects-block', 
            'title'				=> __('Projects block'),
            'description'		=> __('Projects block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'experts-slider', 
            'title'				=> __('Experts slider'),
            'description'		=> __('Experts slider'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'hero-overons', 
            'title'				=> __('Hero overons'),
            'description'		=> __('Hero overons'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'overons-section', 
            'title'				=> __('Overons section'),
            'description'		=> __('Overons section'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'overons-under', 
            'title'				=> __('Overons under'),
            'description'		=> __('Overons under'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'overons-text', 
            'title'				=> __('Overons text'),
            'description'		=> __('Overons text'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'events-block', 
            'title'				=> __('Events block'),
            'description'		=> __('Events block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'opleiding-block', 
            'title'				=> __('Opleiding block'),
            'description'		=> __('Opleiding block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'workshops-block', 
            'title'				=> __('Workshops block'),
            'description'		=> __('Workshops block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));
        
        acf_register_block(array(
            'name'				=> 'inschrijven-block', 
            'title'				=> __('Inschrijven block'),
            'description'		=> __('Inschrijven block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'masterclass-block', 
            'title'				=> __('Masterclass block'),
            'description'		=> __('Masterclass block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'register-block', 
            'title'				=> __('Register block'),
            'description'		=> __('Register block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'slider-masterclass', 
            'title'				=> __('Slider masterclass'),
            'description'		=> __('Slider masterclass'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'logo', 'start' ),
        ));

        acf_register_block(array(
            'name'				=> 'cards-block',
            'title'				=> __('Cards block'),
            'description'		=> __('Cards block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'cards', 'front page' ),
        ));

        acf_register_block(array(
            'name'				=> 'banner-block',
            'title'				=> __('Banner block'),
            'description'		=> __('Banner block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'banner', 'global' ),
        ));

        acf_register_block(array(
            'name'				=> 'calendar-block',
            'title'				=> __('Calendar block'),
            'description'		=> __('Calendar block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'calendar', 'front page' ),
        ));

        acf_register_block(array(
            'name'				=> 'incompany-3-block',
            'title'				=> __('Incompany-3 block'),
            'description'		=> __('Incompany-3 block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'Incompany-3', 'front page' ),
        ));

        acf_register_block(array(
            'name'				=> 'cta-block',
            'title'				=> __('CTA block'),
            'description'		=> __('CTA block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'cta', 'front page' ),
        ));

        acf_register_block(array(
            'name'				=> 'product-slider-block',
            'title'				=> __('Product slider block'),
            'description'		=> __('Product slider block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'product slider', 'global' ),
        ));

        acf_register_block(array(
            'name'				=> 'blurb-block',
            'title'				=> __('Blurb block'),
            'description'		=> __('Blurb block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'blurb', 'blurb global' ),
        ));

        acf_register_block(array(
            'name'				=> 'product-block',
            'title'				=> __('Product block'),
            'description'		=> __('Product block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'products', 'product block' ),
        ));

        acf_register_block(array(
            'name'				=> 'contact-block',
            'title'				=> __('Contact block'),
            'description'		=> __('Contact block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'contact', 'contact form' ),
        ));

        acf_register_block(array(
            'name'				=> 'calendar-full-block',
            'title'				=> __('Calendar full block'),
            'description'		=> __('Calendar full block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'calendar-full', 'calendar full' ),
        ));

        acf_register_block(array(
            'name'				=> 'cards-8-block',
            'title'				=> __('Cards 8 block'),
            'description'		=> __('Cards 8 block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'cards-eight', 'cards eight block' ),
        ));

        acf_register_block(array(
            'name'				=> 'text-block',
            'title'				=> __('Text block'),
            'description'		=> __('Text block'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'text', 'text block' ),
        ));

        // acf_register_block(array(
        //     'name'				=> 'logo-slider-block',
        //     'title'				=> __('Logo slider'),
        //     'description'		=> __('Logo Slider'),
        //     'render_callback'	=> 'my_acf_block_render_callback',
        //     'category'			=> 'thema',
        //     'icon'				=> 'admin-commands',
        //     'keywords'			=> array( 'logo slider', 'logo slider' ),
        // ));

        acf_register_block(array(
            'name'				=> 'product-block-page',
            'title'				=> __('Product block page'),
            'description'		=> __('Product block page'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'thema',
            'icon'				=> 'admin-commands',
            'keywords'			=> array( 'product block page', 'product block page' ),
        ));


    }
}

function my_acf_block_render_callback( $block ) {

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path()."/partials/{$slug}.php") ) {
        include( get_theme_file_path()."/partials/{$slug}.php");
    }else{
        include(get_theme_file_path()."/partials/{$slug}.php");
    }
}

function custom_post_type() {

    $workshop_labels = array(
        'name'                => _x( 'Workshop', 'Workshop', 'workshop' ),
        'singular_name'       => _x( 'Workshop', 'Workshop', 'workshop' ),
        'menu_name'           => __( 'Workshops', 'workshop' ),
        'parent_item_colon'   => __( 'Parent Item:', 'workshop' ),
        'all_items'           => __( 'Alle workshops', 'workshop' ),
        'view_item'           => __( 'Bekijk workshop', 'view_workshop' ),
        'add_new_item'        => __( 'Nieuwe workshop', 'add_new_workshop' ),
        'add_new'             => __( 'Nieuwe workshop', 'text_domain' ),
        'edit_item'           => __( 'Edit Item', 'text_domain' ),
        'update_item'         => __( 'Update Item', 'text_domain' ),
        'search_items'        => __( 'Search Item', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $workshop_args = array(
        'label'               => __( 'workshop', 'text_domain' ),
        'description'         => __( 'Post type voor fdfd workshop', 'text_domain' ),
        'labels'              => $workshop_labels,
        'supports'            => array('title', 'excerpt', 'editor', 'thumbnail', 'custom-fields', 'author' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'menu_icon'           => '',
        'can_export'          => true,
        'rewrite'             => array('slug' => 'workshop'),
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'taxonomies'          => array('post_tag', 'category'),
    );
    register_post_type( 'workshop', $workshop_args );

    $experts_labels = array(
        'name'                => _x( 'Expert', 'Expert', 'expert' ),
        'singular_name'       => _x( 'Expert', 'Expert', 'expert' ),
        'menu_name'           => __( 'Experts', 'expert' ),
        'parent_item_colon'   => __( 'Parent Item:', 'expert' ),
        'all_items'           => __( 'Alle Experts', 'expert' ),
        'view_item'           => __( 'Bekijk expert', 'view_expert' ),
        'add_new_item'        => __( 'Nieuwe expert', 'add_new_expert' ),
        'add_new'             => __( 'Nieuwe expert', 'text_domain' ),
        'edit_item'           => __( 'Edit Item', 'text_domain' ),
        'update_item'         => __( 'Update Item', 'text_domain' ),
        'search_items'        => __( 'Search Item', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $experts_args = array(
        'label'               => __( 'expert', 'text_domain' ),
        'description'         => __( 'Post type voor fdfd expert', 'text_domain' ),
        'labels'              => $experts_labels,
        'supports'            => array('title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => '',
        'can_export'          => true,
        'rewrite'             => array('slug' => 'expert'),
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'taxonomies'          => array('post_tag', 'category'),
    );
    register_post_type( 'expert', $experts_args );

    $labels_project = array(
		// Le nom au pluriel
		'name'                => _x( 'Projects','projects'),
		// Le nom au singulier
		'singular_name'       => _x( 'project', 'project'),
		// Le libell?? affich?? dans le menu
		'menu_name'           => __( 'Project'),
		// Les diff??rents libell??s de l'administration
		'all_items'           => __( 'All projects'),
		'view_item'           => __( 'See all projects'),
		'add_new_item'        => __( 'Add new project'),
		'add_new'             => __( 'Add'),
		'edit_item'           => __( 'Edit project'),
		'update_item'         => __( 'Update project'),
		'search_items'        => __( 'Search project'),
		'not_found'           => __( 'No project found'),
		'not_found_in_trash'  => __( 'Not found'),
	);

    $args_project = array(
		'label'               => __( 'Projects'),
		'description'         => __( 'Description'),
		'labels'              => $labels_project,
		// On d??finit les options disponibles dans l'??diteur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		/* 
		* Diff??rentes options suppl??mentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'project-done'),

	);
    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'project_done', $args_project );


    
}
add_action( 'init', 'custom_post_type', 0 );