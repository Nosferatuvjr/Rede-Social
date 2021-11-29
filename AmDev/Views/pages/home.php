<!DOCTYPE html>
<html>
<head>
	<!--ALTERAR TITULO-->
	<title>Bem-vindo, <?php echo $_SESSION['nome']; ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">

	<!--adsense-->
<script data-ad-client="ca-pub-5375811793059405" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!--analytics-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174181269-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174181269-1');
</script>


</head>

<body>



	<section class="main-feed">
		<?php 
			include('includes/sidebar.php'); 
		?>
		<div class="feed">
			<div class="feed-wraper">
				<div class="feed-form">
					<form method="post">
						<textarea require="" name="post_content" placeholder="Compartilhe conosco o que está pensando! &#128516"></textarea>
						<input type="hidden" name="post_feed">
						<input type="submit" name="acao" value="Postar!">

					</form>
				</div><!--feed-form-->


				<?php
					$retrievePosts = \AmDev\Models\HomeModel::retrieveFriendsPosts();
					foreach($retrievePosts as $key => $value){

				?>
			<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<?php
							if(!isset($value['me']) && $value['img'] == ''){
						?>
							<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
						<?php }else if(!isset($value['me'])){ ?>
							<img src="<?php echo INCLUDE_PATH ?>uploads/<?php echo $value['img'] ?>" />
						<?php } ?>


						<?php
							if(isset($value['me']) && $_SESSION['img'] == ''){
						?>
							<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
						<?php }else if(isset($value['me'])){ ?>
							<img src="<?php echo INCLUDE_PATH ?>uploads/<?php echo $_SESSION['img'] ?>" />
						<?php } ?>

					</div>
					<div class="feed-single-post-author-info">
						<?php if(isset($value['me'])){ ?>
							<h3><?php echo $_SESSION['nome']; ?></h3>
						<?php }else{ ?>

						<h3><?php echo $value['usuario'] ?></h3>
						
						<?php } ?>

						<p><?php echo date('d/m/Y H:i:s',strtotime($value['data'])) ?></p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<?php echo $value['conteudo'] ?>
				</div>
			</div>

			<?php } ?>

		</div>

		

			<div class="friends-request-feed">
				<h4>Solicitações de Amizade</h4>

				<?php
					foreach(\AmDev\Models\UsuariosModel::listarAmizadesPendentes() as $key=>$value){
						$usuarioInfo = \AmDev\Models\UsuariosModel::getUsuarioById($value['enviou']);
				?>
				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					<div class="friend-request-single-info">
						<h3><?php echo $usuarioInfo['nome'] ?></h3>
						<p><a href="<?php echo INCLUDE_PATH ?>?aceitarAmizade=<?php echo $usuarioInfo['id'] ?>">Aceitar</a> | <a href="<?php echo INCLUDE_PATH ?>?recusarAmizade=<?php echo $usuarioInfo['id'] ?>">Recusar</a></p>
					</div>
				</div>
				<?php } ?>

				<h5>Patrocinadores</h5>
				<div class="img-patrocinio">
					<a href="https://amazonasdev.com"><img src="<?php echo INCLUDE_PATH_STATIC ?>images/logoamdev.png" /><a/>
				</div>

			</div>
		</div><!--feed-->
	</section>

</body>


</html>