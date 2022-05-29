<?php
 //taxonomia provincia
 if ( ! function_exists( 'thinkus_provincia_function' ) ) {

    // Register Custom Taxonomy
    function thinkus_provincia_function() {
    
        $labels = array(
            'name'                       => _x( 'Provincias', 'Taxonomy General Name', 'thinkus-employee' ),
            'singular_name'              => _x( 'Provincia', 'Taxonomy Singular Name', 'thinkus-employee' ),
            'menu_name'                  => __( 'Provincias', 'thinkus-employee' ),
            'all_items'                  => __( 'Todas las provincias', 'thinkus-employee' ),
            'parent_item'                => __( 'Provincia superior', 'thinkus-employee' ),
            'parent_item_colon'          => __( 'Provincia superior:', 'thinkus-employee' ),
            'new_item_name'              => __( 'Nueva provincia', 'thinkus-employee' ),
            'add_new_item'               => __( 'Añadir nueva provincia', 'thinkus-employee' ),
            'edit_item'                  => __( 'Editar provincia', 'thinkus-employee' ),
            'update_item'                => __( 'Actualizar provincia', 'thinkus-employee' ),
            'view_item'                  => __( 'Ver provincia', 'thinkus-employee' ),
            'separate_items_with_commas' => __( 'Separada provicias con comas', 'thinkus-employee' ),
            'add_or_remove_items'        => __( 'Añadir o remover provincias', 'thinkus-employee' ),
            'choose_from_most_used'      => __( 'Elegir las mas utilizada', 'thinkus-employee' ),
            'popular_items'              => __( 'Provicias populares', 'thinkus-employee' ),
            'search_items'               => __( 'Buscar provincias', 'thinkus-employee' ),
            'not_found'                  => __( 'No encontrada', 'thinkus-employee' ),
            'no_terms'                   => __( 'No hay provicias', 'thinkus-employee' ),
            'items_list'                 => __( 'Lista de provicias', 'thinkus-employee' ),
            'items_list_navigation'      => __( 'Lista de navegación de provicias', 'thinkus-employee' ),
        );
        $rewrite = array(
            'slug'                       => 'provincia',
            'with_front'                 => true,
            'hierarchical'               => false,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => $rewrite,
            'show_in_rest'               => true,
            'rest_base'                  => 'provincia',
        );
        register_taxonomy( 'thinkus_provincia', array( 'thinkus_employee' ), $args );
    
    }
    add_action( 'init', 'thinkus_provincia_function', 0 );
    
    }
    //taxonomia ciudad
    if ( ! function_exists( 'thinkus_ciudad_function' ) ) {

        // Register Custom Taxonomy
        function thinkus_ciudad_function() {
        
            $labels = array(
                'name'                       => _x( 'Ciudades', 'Taxonomy General Name', 'thinkus-employee' ),
                'singular_name'              => _x( 'Ciudad', 'Taxonomy Singular Name', 'thinkus-employee' ),
                'menu_name'                  => __( 'Ciudades', 'thinkus-employee' ),
                'all_items'                  => __( 'Todas las ciudades', 'thinkus-employee' ),
                'parent_item'                => __( 'Ciudad superior', 'thinkus-employee' ),
                'parent_item_colon'          => __( 'Ciudad superior:', 'thinkus-employee' ),
                'new_item_name'              => __( 'Nueva ciudad', 'thinkus-employee' ),
                'add_new_item'               => __( 'Añadir nueva ciudad', 'thinkus-employee' ),
                'edit_item'                  => __( 'Editar ciudad', 'thinkus-employee' ),
                'update_item'                => __( 'Actualizar ciudad', 'thinkus-employee' ),
                'view_item'                  => __( 'Ver ciudad', 'thinkus-employee' ),
                'separate_items_with_commas' => __( 'Separada ciudades con comas', 'thinkus-employee' ),
                'add_or_remove_items'        => __( 'Añadir o remover ciudades', 'thinkus-employee' ),
                'choose_from_most_used'      => __( 'Elegir las mas utilizada', 'thinkus-employee' ),
                'popular_items'              => __( 'Provicias populares', 'thinkus-employee' ),
                'search_items'               => __( 'Buscar ciudades', 'thinkus-employee' ),
                'not_found'                  => __( 'No encontrada', 'thinkus-employee' ),
                'no_terms'                   => __( 'No hay ciudades', 'thinkus-employee' ),
                'items_list'                 => __( 'Lista de ciudades', 'thinkus-employee' ),
                'items_list_navigation'      => __( 'Lista de navegación de ciudades', 'thinkus-employee' ),
            );
            $rewrite = array(
                'slug'                       => 'ciudades',
                'with_front'                 => true,
                'hierarchical'               => false,
            );
            $args = array(
                'labels'                     => $labels,
                'hierarchical'               => false,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => $rewrite,
                'show_in_rest'               => true,
                'rest_base'                  => 'ciudades',
            );
            register_taxonomy( 'thinkus_ciudad', array( 'thinkus_employee' ), $args );
        
        }
        add_action( 'init', 'thinkus_ciudad_function', 0 );
        
        }
    //taxonomia perfil
    if ( ! function_exists( 'thinkus_perfil_function' ) ) {

        // Register Custom Taxonomy
        function thinkus_perfil_function() {
        
            $labels = array(
                'name'                       => _x( 'perfiles', 'Taxonomy General Name', 'thinkus-employee' ),
                'singular_name'              => _x( 'perfil', 'Taxonomy Singular Name', 'thinkus-employee' ),
                'menu_name'                  => __( 'perfiles', 'thinkus-employee' ),
                'all_items'                  => __( 'Todas las perfiles', 'thinkus-employee' ),
                'parent_item'                => __( 'perfil superior', 'thinkus-employee' ),
                'parent_item_colon'          => __( 'perfil superior:', 'thinkus-employee' ),
                'new_item_name'              => __( 'Nueva perfil', 'thinkus-employee' ),
                'add_new_item'               => __( 'Añadir nueva perfil', 'thinkus-employee' ),
                'edit_item'                  => __( 'Editar perfil', 'thinkus-employee' ),
                'update_item'                => __( 'Actualizar perfil', 'thinkus-employee' ),
                'view_item'                  => __( 'Ver perfil', 'thinkus-employee' ),
                'separate_items_with_commas' => __( 'Separada perfiles con comas', 'thinkus-employee' ),
                'add_or_remove_items'        => __( 'Añadir o remover perfiles', 'thinkus-employee' ),
                'choose_from_most_used'      => __( 'Elegir las mas utilizada', 'thinkus-employee' ),
                'popular_items'              => __( 'Provicias populares', 'thinkus-employee' ),
                'search_items'               => __( 'Buscar perfiles', 'thinkus-employee' ),
                'not_found'                  => __( 'No encontrada', 'thinkus-employee' ),
                'no_terms'                   => __( 'No hay perfiles', 'thinkus-employee' ),
                'items_list'                 => __( 'Lista de perfiles', 'thinkus-employee' ),
                'items_list_navigation'      => __( 'Lista de navegación de perfiles', 'thinkus-employee' ),
            );
            $rewrite = array(
                'slug'                       => 'perfiles',
                'with_front'                 => true,
                'hierarchical'               => false,
            );
            $args = array(
                'labels'                     => $labels,
                'hierarchical'               => false,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => $rewrite,
                'show_in_rest'               => true,
                'rest_base'                  => 'perfiles',
            );
            register_taxonomy( 'thinkus_perfil', array( 'thinkus_employee' ), $args );
        
        }
        add_action( 'init', 'thinkus_perfil_function', 0 );
        
        }
    //taxonomia tecnologia
    if ( ! function_exists( 'thinkus_tecnologia_function' ) ) {

        // Register Custom Taxonomy
        function thinkus_tecnologia_function() {
        
            $labels = array(
                'name'                       => _x( 'tecnologias', 'Taxonomy General Name', 'thinkus-employee' ),
                'singular_name'              => _x( 'tecnologia', 'Taxonomy Singular Name', 'thinkus-employee' ),
                'menu_name'                  => __( 'tecnologias', 'thinkus-employee' ),
                'all_items'                  => __( 'Todas las tecnologias', 'thinkus-employee' ),
                'parent_item'                => __( 'tecnologia superior', 'thinkus-employee' ),
                'parent_item_colon'          => __( 'tecnologia superior:', 'thinkus-employee' ),
                'new_item_name'              => __( 'Nueva tecnologia', 'thinkus-employee' ),
                'add_new_item'               => __( 'Añadir nueva tecnologia', 'thinkus-employee' ),
                'edit_item'                  => __( 'Editar tecnologia', 'thinkus-employee' ),
                'update_item'                => __( 'Actualizar tecnologia', 'thinkus-employee' ),
                'view_item'                  => __( 'Ver tecnologia', 'thinkus-employee' ),
                'separate_items_with_commas' => __( 'Separada tecnologias con comas', 'thinkus-employee' ),
                'add_or_remove_items'        => __( 'Añadir o remover tecnologias', 'thinkus-employee' ),
                'choose_from_most_used'      => __( 'Elegir las mas utilizada', 'thinkus-employee' ),
                'popular_items'              => __( 'Provicias populares', 'thinkus-employee' ),
                'search_items'               => __( 'Buscar tecnologias', 'thinkus-employee' ),
                'not_found'                  => __( 'No encontrada', 'thinkus-employee' ),
                'no_terms'                   => __( 'No hay tecnologias', 'thinkus-employee' ),
                'items_list'                 => __( 'Lista de tecnologias', 'thinkus-employee' ),
                'items_list_navigation'      => __( 'Lista de navegación de tecnologias', 'thinkus-employee' ),
            );
            $rewrite = array(
                'slug'                       => 'tecnologias',
                'with_front'                 => true,
                'hierarchical'               => false,
            );
            $args = array(
                'labels'                     => $labels,
                'hierarchical'               => false,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => $rewrite,
                'show_in_rest'               => true,
                'rest_base'                  => 'tecnologias',
            );
            register_taxonomy( 'thinkus_tecnologia', array( 'thinkus_employee' ), $args );
        
        }
        add_action( 'init', 'thinkus_tecnologia_function', 0 );
        
        }