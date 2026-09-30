<?php

// Verifica se o formulário foi enviado através do método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Recebe e limpa os dados enviados pelo formulário
  $name = trim($_POST['nome'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $message = trim($_POST['mensagem'] ?? '');

  // E-mail que receberá as mensagens
  $to = 'gerente@gsmicros.com.br';

  // Assunto do e-mail
  $subject = 'Mensagem do formulário de contato';

  // Monta o conteúdo da mensagem
  $body = "Nome: $name\n";
  $body .= "E-mail: $email\n\n";
  $body .= "Mensagem:\n$message";

  // Cabeçalho informando o e-mail de quem enviou
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  // Tenta enviar o e-mail
  if (mail($to, $subject, $body, $headers)) {

    echo '<h2>Sua mensagem foi enviada com sucesso!</h2>';
    echo '<p>Obrigado pelo contato.</p>';
    echo '<a href="../index.php">Voltar para o site</a>';
  } else {

    echo '<h2>Não foi possível enviar sua mensagem.</h2>';
    echo '<p>Por favor, tente novamente mais tarde.</p>';
    echo '<a href="../index.php#contact">Voltar para o formulário</a>';
  }
} else {

  // Impede o acesso direto ao arquivo PHP
  echo '<h2>Acesso inválido.</h2>';
  echo '<a href="../index.php#contact">Voltar para o formulário</a>';
}
