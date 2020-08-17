<?php 
/*
    Plugin Name: Top Autores
    Description: Gera uma lista dos autores que mais postaram, através de um shortcode
    Author: Jonathan Soares
    Version: 1.0 Beta
    Author URI: https://github.com/jonathansoares09/

*/
    define('DIRETORIO_RAIZ_TOP_AUTORES', plugin_dir_path(__FILE__)); // Define a pasta raiz do plugin (caminho absoluto)

    require_once(DIRETORIO_RAIZ_TOP_AUTORES.'shortcodes/top-autores-shortcode.php'); // Chama o arquivo que estrutura o shortcode
    require_once(DIRETORIO_RAIZ_TOP_AUTORES.'widgets/WidgetTopAutores.php');

    function top_autores_register_widgets() {  // Função que registra o widget criado
        
        register_widget('WidgetTopAutores');
    }

    add_action('init', 'shortcode_top_autores_register');
    add_action('widgets_init', 'top_autores_register_widgets');
?>