<?php 
    function shortcode_top_autores_front_end () {
        
        $dados = get_users(array("orderby"=>"post_count","order"=>"DESC"));

        echo "<h1>Top Autores</h1>";
        echo "<p> Uma lista com os usuários que mais postaram. </p>";
        
        foreach ($dados as $dado) {
            echo "<hr>";

            echo get_avatar($dado->ID)."<br/><br/>";
            echo "Nome: <b>".esc_html($dado->user_nicename)."</b><br/>";
            echo "E-mail: <b>".esc_html($dado->user_email)."</b><br/>";

            if (empty($dado->user_url)) {
                $dado->user_url = "Esse usuário não possui site.";
            }
            
            echo "Número de posts: <b>".count_user_posts($dado->ID)."</b><br/>";

            echo "Site: <b>".$dado->user_url."</b><br/>";
            $link = get_author_posts_url($dado->ID);
            echo "<a href='$link' target='_blank'><button>Visualizar posts</button></a>";
        }
    }

    function shortcode_top_autores_register() {
        add_shortcode('top-autores', 'shortcode_top_autores_front_end');
    }
?>