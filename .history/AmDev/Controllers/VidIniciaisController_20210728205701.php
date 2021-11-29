<?php
    namespace AmDev\Controllers;

    class DiscoverController{
        public function index(){
            if(isset($_SESSION['login'])){



                \AmDev\Views\MainView::render('videosiniciais');
            }else{
                \AmDev\Utilidades::redirect(INCLUDE_PATH);
            }
        }
    }
?>