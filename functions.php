<?php 
function portfolioTheme_register_styles(){

    wp_enqueue_style('portfolioTheme-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp_enqueue_style('portfolioTheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('portfolioTheme-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
    wp_enqueue_style('portfolioTheme-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all');

}

add_action( 'wp_enqueue_scripts', 'portfolioTheme_register_styles');


function portfolioTheme_register_scripts()
{
    wp_enqueue_script('portfolioTheme-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.4.1', true);
    wp_enqueue_script('portfolioTheme-popper',"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array(), '1.12.9', true);
    wp_enqueue_script('portfolioTheme-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), '4.0.0', true);
    wp_enqueue_script('portfolioTheme-aos', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '2.3.1', true);
    wp_enqueue_script('portfolioTheme-main',get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
    wp_enqueue_script('portfolioTheme-main-jquery',get_template_directory_uri() . "/assets/js/jquery.js", array(), '1.0', true);

}  

add_action('wp_enqueue_scripts', 'portfolioTheme_register_scripts');

?>