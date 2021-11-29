<?php
    namespace AmDev\Controllers;

    class SuporteController{
        public function index(){
            if(isset($_SESSION['login'])){



                \AmDev\Views\MainView::render('discover');
            }else{
                \AmDev\Utilidades::redirect(INCLUDE_PATH);
            }
        }
}

?>