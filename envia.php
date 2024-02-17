<?php

   $nome = addslashes($_POST['nome']);
   $email = addslashes($_POST['email']);
   $telefone = addslashes($_POST['telefone']);

   $para = "doliveer1k@gmail.com";
   $assunto = "Coleta de dados - portifolio";

   $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."\n"."Telefone: ".$telefone;

   $cabeca = "From: teste@inteliogia.com"."\n"."Reply-to: ".$email."\n"."X=Mailer: PHP/".phpversion();

   if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
   }else{
    echo("Houve um erro ao enviar o Email!");
   }

?>