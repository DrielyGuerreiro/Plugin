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
add_filter ('login_errors','altera_msg_login');

function altera_msg_login(){
    return 'Credenciais inválidas';
}