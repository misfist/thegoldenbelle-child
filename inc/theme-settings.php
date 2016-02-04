<?php

/**
 * Theme Page Builder Template Override
 */
if(!( class_exists('AQ_Icon_Column_Block') )){
    require_once ( trailingslashit( get_stylesheet_directory() ) . 'page_builder_blocks/icon_block.php' );
    aq_register_block('AQ_Icon_Column_Block');
}

if(!( class_exists('AQ_Pricing_Table_Block') )){
    require_once ( trailingslashit( get_stylesheet_directory() ) . '/page_builder_blocks/pricing_table_block.php' );
    aq_register_block('AQ_Pricing_Table_Block');
}

if(!( class_exists('AQ_Blog_Block') )){
    require_once ( trailingslashit( get_stylesheet_directory() ) . 'page_builder_blocks/blog_block.php' );
    aq_register_block('AQ_Blog_Block');
}

if(!( class_exists('AQ_Call_To_Action_Block') )){
    require_once ( trailingslashit( get_stylesheet_directory() ) . 'page_builder_blocks/call_to_action_block.php' );
    aq_register_block('AQ_Call_To_Action_Block');
}

/**
 * Register Footer Widget for Copyright
 */
add_action( 'widgets_init', 'tgb_register_widgets' );

function tgb_register_widgets() {
    $args = array(
        'name'          => __( 'Copyright Footer', 'loom' ),
        'id'            => 'footer-copyright',
        'description'   => 'Widget area to add copyright info',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    );

    register_sidebar( $args );
}


?>