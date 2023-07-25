<?php
$ravig_scripts = array(
    'styles' => array(
        'main' => array(
            'src' => RAVIG_CSS_DIR . '/main.css',
        ),
        'modifications' => array(
            'src' => RAVIG_CSS_DIR . '/modifications.css',
        ),

        // Onlt about page
        'about-page' => array(
            'src' => RAVIG_CSS_DIR . '/about.css',
        ),
        // 'ravig-style' => array(
        //     'src' => '/style.css',
        //     'condition' => function() { return is_front_page(); } // Enqueue only on the front page
        // ),
    ),
    'scripts' => array(
        'header' => array(
            'src' => RAVIG_JS_DIR . '/header.js',
            'deps' => array(),
            'in_footer' => true,
        ),
        'home' => array(
            'src' => RAVIG_JS_DIR . '/home.js',
            'deps' => array(),
            'in_footer' => true,
            'condition' => function() { return is_front_page(); } 
        ),
       
    ),
);

function ravig_enqueue() {
    global $ravig_scripts;

    foreach ($ravig_scripts['styles'] as $handle => $style) {
        if (isset($style['condition']) ? call_user_func($style['condition']) : true) {
            wp_enqueue_style($handle, $style['src']);
        }
    }

    foreach ($ravig_scripts['scripts'] as $handle => $script) {
        if (isset($script['condition']) ? call_user_func($script['condition']) : true) {
            wp_enqueue_script($handle, $script['src'], $script['deps'], false, $script['in_footer']);
        }
    }
}
add_action('wp_enqueue_scripts', 'ravig_enqueue');
?>
