<?php
	
	namespace AmDev\Controllers;

	class RegistrarController{


		public function index(){

			if(isset($_POST['registrar'])){
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$senha = $_POST['senha'];

				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					\AmDev\Utilidades::alerta('E-mail Inválido.');
					\AmDev\Utilidades::redirect(INCLUDE_PATH.'registrar');
				}else if(strlen($senha) < 8){
					\AmDev\Utilidades::alerta('Sua senha é muito curta.');
					\AmDev\Utilidades::redirect(INCLUDE_PATH.'registrar');
				}else if(\AmDev\Models\UsuariosModel::emailExists($email)){
					\AmDev\Utilidades::alerta('Este e-mail já existe no banco de dados!');
					\AmDev\Utilidades::redirect(INCLUDE_PATH.'registrar');
				}else{
					//Registrar usuário.
					$senha = \AmDev\Bcrypt::hash($senha);
					$registro = \AmDev\MySql::connect()->prepare("INSERT INTO usuarios VALUES (null,?,?,?,'','')");
					$registro->execute(array($nome,$email,$senha));

					\AmDev\Utilidades::alerta('Registrado com sucesso!');
					\AmDev\Utilidades::redirect(INCLUDE_PATH);
				}


			}
			
			\AmDev\Views\MainView::render('registrar');
			

		}

	}

?>