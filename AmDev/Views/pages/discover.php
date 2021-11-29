<!DOCTYPE html>
<html lang="en">

<head>
    <title>Discover de > <?php echo $_SESSION['nome']; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/discover.css" rel="stylesheet">

    <!--adsense-->
    <script data-ad-client="ca-pub-5375811793059405" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!--analytics-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174181269-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-174181269-1');
    </script>
</head>


<body>


    <?php include('includes/aside.php') ?>

    <section>
        <?php include('includes/header.php') ?>
        <!--  <header>
            <div class="titulo-content">
                <h1>Página inicial</h1>
            </div>
        </header> -->

        <div class="content">
            <h1>Seja bem-vindo ao <span style="color: #EE8844; text-decoration:underline;">Discover</span> da
                <span style="color: #EA701F; text-decoration:dashed;">Amazonas Desenvolvimento</span>
            </h1>

            <h2>O que é o <span style="color: chocolate">Discover?</span></h2>
            <!--<h2>Em Produção... &#128527;</h2>-->

            <p>O Discover é uma Plataforma Educacional para disponibilização de vídeo aulas sobre
                tecnologia, educação, edição de vídeo, edição de fotos, e muito mais.
            </p>

            <div class="coming">
                <img src="<?php echo INCLUDE_PATH_STATIC ?>images/source.gif" alt="Em Breve">
            </div>

                        

        </div>
    </section>

</body>

</html>