<?php
    namespace AmDev\Controllers;

    class ApoienosController{
        public function index(){
            if(isset($_SESSION['login'])){



                \AmDev\Views\MainView::render('apoienos');
            }else{
                \AmDev\Utilidades::redirect(INCLUDE_PATH);
            }
        }
    }
?>