<?php
if ($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'contato@gsmicros.com.br';
  $subject = 'Mensagem do formulário de contato';
  $body = "Nome: $name\nEmail: $email\nMensagem:\n$message";

  if (mail($to, $subject, $body)) {
    echo 'Sua mensagem foi enviada com sucesso!';
  } else {
    echo 'Houve um problema ao enviar sua mensagem. Por favor, tente novamente mais tarde!';
  }
}
