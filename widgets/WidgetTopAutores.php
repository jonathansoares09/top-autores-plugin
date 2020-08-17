<?php

class WidgetTopAutores extends WP_Widget{


    public function __construct(){  // É o primeiro método que a class vai executar.

        $dado = array(
            "classname" => "WidgetTopAutores",
            "description" => "Um Widget que lista em ordem decrescente os autores que mais postam no blog.");
        
        parent::__construct("widget_top_autores", "Top Autores", $dado);

    }

    public function widget($dado, $instance) {
        require(DIRETORIO_RAIZ_TOP_AUTORES.'widgets/widget_top_autores_front_end.php');
    }

    public function form($instance) { // Responsável por exibir o form na hora que adicionamos o widget
        
    }

}

?>