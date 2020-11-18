<?php
/*
* Plugin Name: Plug in Com Menu
* Plugin URI : https://sp.senac.br
* Description : Este é um lindo plugin que mostrs como trabalhar com o menu admin no WP
* Version: 0.0.1
* Author: Driely Guerreiro
* Autor URI : https://sp.senac.br
* License: CC BY 
*/
add_action ( 'admin_menu', 'menu_do_meu_plugin');
function menu_do_meu_plugin(){
    //Exemplo para criação de menu em primeiro nível
    /*
    add_menu_page ('Configurações do Meu Plug-in',
                    'Meu Plug in',
                    'administrator',
                    'meu-plugin-config',
                    'abre_configuracoes',
                    'dashicons-adimin-generic');
    */
    add_submenu_page( 'options-general.php',
                      'Configurações do Meu Plug-in',
                      'Meu Plug in',
                      'administrator',
                      'meu-plugin-config',
                      'abre_configuracoes');               
}
function abre_configuracoes(){
    require 'plugin_com_menu_tpl.php';
}
