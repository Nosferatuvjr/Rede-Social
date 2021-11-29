<?php

  function enviarMensagem($dados){
    //dados do formulario
    $nome_user = $dados['nome'];
    $email_user = $dados['email'];
    $mensagem_user = $dados['mensagem'];

    //criar variaveis de envio
    $destino = "vivaldochagassjr@gmail.com";
    $remetente = "contato@amazonasdev.com";
    $assunto = "Mensagem do Suporte da Plataforma Discover";

    //montar corpo da mensagem
    $mensagem = "O usuário ". $nome_user." enviou uma mensagem. ";
    $mensagem .= "O e-mail do usúario é ". $email_user;
    $mensagem .= " E a mensagem é = ";
    $mensagem .= $mensagem_user;    

    return mail($destino, $assunto, $mensagem, $remetente);

  }
?>