<?php 

if(! function_exists( 'thegoldenbelle_enqueue_styles' ) ) {

    function thegoldenbelle_enqueue_styles() {
        $parent_style = 'ebor-style';
        $icon_fonts = 'ebor-style';

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'thegoldenbelle-style',
            trailingslashit( get_stylesheet_directory_uri() ) . 'assets/styles/style.min.css',
            array( $parent_style )
        );
    }

    add_action( 'wp_enqueue_scripts', 'thegoldenbelle_enqueue_styles' );

}


if(!( class_exists('AQ_Icon_Column_Block') )){
    require_once ( "page_builder_blocks/icon_block.php" );
    aq_register_block('AQ_Icon_Column_Block');
}

if(!( class_exists('AQ_Pricing_Table_Block') )){
    require_once ( "page_builder_blocks/pricing_table_block.php" );
    aq_register_block('AQ_Pricing_Table_Block');
}

if(!( class_exists('AQ_Blog_Block') )){
    require_once ( "page_builder_blocks/blog_block.php" );
    aq_register_block('AQ_Blog_Block');
}


?>