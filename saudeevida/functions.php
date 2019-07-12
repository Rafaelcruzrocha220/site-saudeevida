<?php

define('URI', get_template_directory_uri( ));

function load_scripts(){
    $version = rand(0,100);

    wp_enqueue_style( 'social' , URI.'/Assets/css/social.css' , array() , $version);
    wp_enqueue_style( 'style' , URI.'/style.css' , array() , $version);
    wp_enqueue_style( 'bootstrap' , "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" );
    wp_enqueue_style( 'card' , URI.'/Assets/css/card.css' , array() , $version);
    wp_enqueue_style( 'footer' , URI.'/Assets/css/footer.css' , array() , $version);
    wp_enqueue_style( 'upbutton' , URI.'/Assets/css/upbutton.css' , array() , $version);
    wp_enqueue_style( 'animation' , URI.'/Assets/css/animation.css' , array() , $version);
    wp_enqueue_style( 'lembrete' , URI.'/Assets/css/lembrete.css' , array() , $version);
    
    // Responsive
    wp_enqueue_style( 'mobile' , URI.'/Assets/css/responsive/mobile.css' , array() , $version);
    wp_enqueue_style( 'tablet' , URI.'/Assets/css/responsive/tablet.css' , array() , $version);

    wp_enqueue_script( 'jquery', URI.'/Assets/js/jquery.js', array(''), $version , TRUE);
    wp_enqueue_script( 'upbutton', URI.'/Assets/js/buttonup.js', array('jquery'), $version , TRUE);
    wp_enqueue_script( 'lembretejs', URI.'/Assets/js/lembrete.js', array('jquery'), $version , TRUE);
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );
