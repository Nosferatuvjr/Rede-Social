<?php
	
	namespace AmDev\Controllers;

	class HomeController{


		public function index(){

			if(isset($_GET['loggout'])){
				session_unset();
				session_destroy();

				\AmDev\Utilidades::redirect(INCLUDE_PATH);
			}


			if(isset($_SESSION['login'])){
				//Renderiza a home do usuário.

				//Existe pedido de amizade?

				if(isset($_GET['recusarAmizade'])){
					$idEnviou = (int) $_GET['recusarAmizade'];
					\AmDev\Models\UsuariosModel::atualizarPedidoAmizade($idEnviou,0);
					\AmDev\Utilidades::alerta('Amizade Recusada :(');
					\AmDev\Utilidades::redirect(INCLUDE_PATH);
				}else if(isset($_GET['aceitarAmizade'])){
					$idEnviou = (int) $_GET['aceitarAmizade'];
					if(\AmDev\Models\UsuariosModel::atualizarPedidoAmizade($idEnviou,1)){
					\AmDev\Utilidades::alerta('Amizade aceita!');
					\AmDev\Utilidades::redirect(INCLUDE_PATH);
					}else{
					\AmDev\Utilidades::alerta('Ops.. um erro ocorreu!');
					\AmDev\Utilidades::redirect(INCLUDE_PATH);
					}
				}


				//Existe postagem no feed?


				if(isset($_POST['post_feed'])){

					if($_POST['post_content'] == ''){
						\AmDev\Utilidades::alerta('Não permitimos posts vazios :(');
						\AmDev\Utilidades::redirect(INCLUDE_PATH);
					}

					\AmDev\Models\HomeModel::postFeed($_POST['post_content']);
					\AmDev\Utilidades::alerta('Postagem feita com sucesso!');
					\AmDev\Utilidades::redirect(INCLUDE_PATH);
				}


				\AmDev\Views\MainView::render('home');
			}else{
				//Renderizar para criar conta.

				if(isset($_POST['login'])){
					$login = $_POST['email'];
					$senha = $_POST['senha'];

					

					//Verificar no banco de dados.

					$verifica = \AmDev\MySql::connect()->prepare("SELECT * FROM usuarios WHERE email = ?");
					$verifica->execute(array($login));



					
					if($verifica->rowCount() == 0){
						//Não existe o usuário!
						\AmDev\Utilidades::alerta('Não existe nenhum usuário com este e-mail...');
						\AmDev\Utilidades::redirect(INCLUDE_PATH);
					}else{
						$dados = $verifica->fetch();
						$senhaBanco = $dados['senha'];
						if(\AmDev\Bcrypt::check($senha,$senhaBanco)){
							//Usuário logado com sucesso
							
							$_SESSION['login'] = $dados['email'];
							$_SESSION['id'] = $dados['id'];
							$_SESSION['nome'] = explode(' ',$dados['nome'])[0];
							$_SESSION['img'] = $dados['img'];
							\AmDev\Utilidades::alerta('Logado com sucesso! Seja bem-vindo a primeira Rede Social nascida em Manacapuru, no Amazonas. Essa rede social ainda está em desenvolvimento, ou seja, por enquanto ainda não estamos aceitando postagem de fotos e vídeos, somente postagens de textos. Logo estaremos com tudo funcionando. Atenciosamente, equipe Amazonas Desenvolvimento!');
							\AmDev\Utilidades::redirect(INCLUDE_PATH);
						}else{
							\AmDev\Utilidades::alerta('Senha incorreta....');
							\AmDev\Utilidades::redirect(INCLUDE_PATH);
						}
					}
					

				}

				\AmDev\Views\MainView::render('login');
			}
		}

	}

?>