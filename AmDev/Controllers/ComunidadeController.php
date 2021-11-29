<?php
    namespace AmDev\Controllers;

    class ComunidadeController{
        public function index(){
            if(isset($_SESSION['login'])){

                if(isset($_GET['solicitarAmizade'])){
                    $idPara = (int) $_GET['solicitarAmizade'];
                    if(\AmDev\Models\UsuariosModel::solicitarAmizade($idPara)){
                        
						\AmDev\Utilidades::redirect(INCLUDE_PATH.'comunidade');
                    }else{
                        \AmDev\Utilidades::alerta('Ocorreu um erro ao solicitar a amizade...');
						\AmDev\Utilidades::redirect(INCLUDE_PATH.'comunidade');
                    }
                }

                \AmDev\Views\MainView::render('comunidade');
            }else{
                \AmDev\Utilidades::redirect(INCLUDE_PATH);
        }
    }
}
?>