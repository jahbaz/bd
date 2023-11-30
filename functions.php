<?php
wp_enqueue_style('style-1', get_stylesheet_uri());
wp_enqueue_style('style-boot', get_template_directory_uri() . './assets/css/bootstrap.min.css');
wp_enqueue_script('script-boot', get_template_directory_uri() . './assets/js/bootstrap.bundle.min.js');

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');


register_nav_menus([
    'TM'=>'primary',
    'FM'=>'footer'
]);

register_sidebar([
    'name'=>'List',
    'id'=>'list',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Side left Vedio 1',
    'id'=>'sidv1',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Side left Vedio 2',
    'id'=>'sidv2',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Side left Vedio 3',
    'id'=>'sidv3',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Side left Vedio 11',
    'id'=>'sidv11',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Side left Vedio 34',
    'id'=>'sidv34',
    'before_widget'=>''
]);

register_sidebar([
    'name'=>'Side left Vedio 33',
    'id'=>'sidv33',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Side left Vedio 12 ',
    'id'=>'sidv12',
    'before_widget'=>''
]);

register_sidebar([
    'name'=>'Side left Vedio 40',
    'id'=>'sidv40',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Side right 1',
    'id'=>'sider1',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Side right 2',
    'id'=>'sidr2',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'footer image',
    'id'=>'foot',
    'before_widget'=>''
]);

?>