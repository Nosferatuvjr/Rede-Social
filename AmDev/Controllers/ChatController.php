<?php
    namespace AmDev\Controllers;

    class ChatController{
        public function index(){
            if(isset($_SESSION['login'])){



                \AmDev\Views\MainView::render('chat');
            }else{
                \AmDev\Utilidades::redirect(INCLUDE_PATH);
            }
        }
    }
