
<?php function bloger_theme_support(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails');

    register_nav_menu('main-menu','Main menu');
    
}
add_action('after_setup_theme','bloger_theme_support');

function bloger_support_style(){
    wp_enqueue_style('main-css',get_template_directory_uri().'/style.css');

}
add_action('wp_enqueue_scripts','bloger_support_style');

function widget(){
    register_sidebar(array(
       'name'=>'Footer',
       'id'=>'footer',
       'before_widget'=>'<footer>',
       'after_widget'=>'</footer>'
    ));
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar1',
        'before_widget'=>'<widget>',
        'after_widget'=>'</widget>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
     ));


}
add_action('widgets_init','widget');

function excerpt_function_filter(){
   return 30;
}
add_filter('excerpt_length','excerpt_function_filter');
