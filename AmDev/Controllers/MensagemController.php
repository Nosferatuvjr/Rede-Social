<?php
    namespace AmDev\Controllers;

    class MensagemController{
        public function index(){
            if(isset($_SESSION['login'])){

                \AmDev\Views\MainView::render('mensagem');
            }else{
                \AmDev\Utilidades::redirect(INCLUDE_PATH);
            }
        }
    }
