<?php
/*
* Plugin Name: Meu Primeiro Plug-in
* Plugin URI : https://sp.senac.br
* Description : Este é um lindo plugin desenvolvido por mim
* Version: 0.0.1
* Author: Driely Guerreiro
* Autor URI : https://sp.senac.br
* License: CC BY 
*/
add_filter ('login_errors','alterar_msg_login');

function alterar_msg_login(){
    return 'Credenciais inválidas';
}

add_action ('wp_head', 'colocar_og_tags');
function colocar_og_tags () {
    if ( is_single() ){

        $dados_do_post= get_post(get_the_ID () );
        $nome_do_site = get_bloginfo ();
        $resumo = $dados_do_post ->post_excerpt;
        $titulo = $dados_do_post ->post_title;
        

        echo " \n\n\n\n
                <meta property='og:title' content=' ". $titulo ." '>
                <meta property='og:site_name' content=' ". $nome_do_site . " '> \n
                <meta property='og:url' content=' ". get_permalink() ." '> \n
                <meta property='og:description' content=' ". $resumo ." '> \n


                \n\n\n\n";
    }
}

