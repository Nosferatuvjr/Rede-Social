<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discover de > <?php echo $_SESSION['nome']; ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>../estilos/discover.css" rel="stylesheet">

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
<section class="header">
    <div class="logo">
        <a href="#"><img src="<?php echo INCLUDE_PATH_STATIC ?>images/logoamdev1.png" /></a>
    </div>
</section>


<div class="corpo-discover">
    <div class="corpo-principal">
      

<div class="line"></div>

<div class="titulo">
    <h1>Vídeos disponíveis</h1>
</div>

<div class="videos">
    <a feature="true" color="#E83F5B" available="true" class="videos1" href="#">
        <img src="<?php echo INCLUDE_PATH_STATIC ?>images/discover1.PNG" alt="Discover">
        <h1>Vídeos iniciais e guias</h1>
        <p>Configure o seu ambiente de estudo com os vídeos iniciais da plataforma.</p>
    </a>
</div>

<div class="videos">
    <a feature="true" color="#8257E6" available="true" class="videos2" href="#">
        <img src="<?php echo INCLUDE_PATH_STATIC ?>images/discover2.PNG" alt="Discover">
        <h1>Produção textual</h1>
        <p>Configure o seu ambiente de estudo com os vídeos iniciais da plataforma.</p>
    </a>
</div>

<div class="videos">
    <a feature="true" color="#E83F5B" available="true" class="videos3" href="#">
        <img src="<?php echo INCLUDE_PATH_STATIC ?>images/discover3.PNG" alt="Discover">
        <h1>Inglês para professores</h1>
        <p>Configure o seu ambiente de estudo com os vídeos iniciais da plataforma.</p>
    </a>
</div>


<div class="line"></div>

<div class="titulo">
    <h1>Sobre a plataforma</h1>
</div>

<div class="sobre-discover">
    <a feature="true" available="true" class="videos5" href="#">
        <img src="<?php echo INCLUDE_PATH_STATIC ?>images/person_vivaldo.jpg" alt="">
        <h1>Criadores e plataforma</h1>
        <p>Conheça-nos. Saiba quem nós somos e o que pensamos para criar a plataforma. Conheça também a plataforma, como 
            e para o que foi criada.
        </p>
    </a>
</div>

            <!--<div class="botao-menu">
                <button class="botao">
                </button>
            </div>-->

            <!--<div class="perfil">
                <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.png" alt="Avatar de perfil">
            </div>-->
    </div><!--corpo-principal-->
</div><!--corpo-discover-->
    
</body>
</html>