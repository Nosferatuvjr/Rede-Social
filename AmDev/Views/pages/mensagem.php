<?php require_once("includes/contact.php") ?>
<?php 
      if (isset($_POST['enviar'])){
        if(enviarMensagem($_POST)){
            \AmDev\Utilidades::alerta('Mensagem enviada com sucesso. Muito obrigado por compartilhar sua opinião conosco. Aguarde nosso retorno!');
            \AmDev\Utilidades::redirect(INCLUDE_PATH . 'mensagem');
        }else{
            \AmDev\Utilidades::alerta('Erro ao enviar sua mensagem, tente novamente!');
            \AmDev\Utilidades::redirect(INCLUDE_PATH . 'mensagem');
        }
      }

?>

<!DOCTYPE html>
<html>

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

    <div class="discover-mensagem">
      <h3>Amazonas Desenvolvimento</h3>
      <h1>@ Atendimento</h1>
      <div class="line"></div>
    </div>

    <form class="formulario" method="post" action="<?php include_once("includes/contact.php") ?>">
      <p>O Sistema está em desenvolvimento, mas você já pode nos enviar uma mensagem &#128527;</p>
      <div class="field">
        <label for="nome">Seu Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
      </div>
      <div class="field">
        <label for="email">Seu E-Mail:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail*" required>
      </div>
      <div class="field">
        <label for="mensagem">Sua mensagem:</label>
        <textarea name="mensagem" id="mensagem" placeholder="Envie-nos sua mensagem.*" required></textarea>
      </div>
      <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if (isset($mensagem)) {
      echo "<p>" . $mensagem . "<p>";
    }
    ?>
  </section>



</body>

</html>