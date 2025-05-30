<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['celular']);

    $para = 'marchioliprogrammer@gmail.com'
    $mensagem = 'Coleta de dados'

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: jeguinprais@gmail.com"."\n"."Replay-to".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($para,$mensagem,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    } else {
        echo("Ouve um erro ao enviar o E-mail, verifique se os dados foram preenchidos corretamente!")
    }

?>