<?php
    namespace AmDev\Controllers;

    class SuporteController{
        public function index(){
            if(isset($_SESSION['login'])){



                \AmDev\Views\MainView::render('suporte');
            }else{
                \AmDev\Utilidades::redirect(INCLUDE_PATH);
            }
        }
}

?>