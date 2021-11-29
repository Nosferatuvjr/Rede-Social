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

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-174181269-1');
  </script>

</head>

<body>

  <section class="main-feed">
    <?php
    include('includes/sidebar.php');
    ?>


    <form class=contato-form>
      <h1>Chat!</h1>
      


  </section>


</body>


</html>