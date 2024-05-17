<?php
$receiving_email_address = 'contato@gsmicros.com.br';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}


if (isset($_POST['nome']) && !empty($_POST['nome'])) {
  $name = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $msg = addslashes($_POST['message']);
  $subject = addslashes($_POST['subject']);

  $to = "jgmicroshs@gmail.com";
  $assunto = "Pergunta do Contato";
  $corpo = "Nome: " . $name . " - Email: " . $email . " - Mensagem: " . $msg . " - Objetivo: " . $object;
  $cabecalho = "From: contato@gsmicros.com.br" . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

  mail($to, $assunto, $corpo, $cabecalho);

  $contact = new PHP_Email_Form($to, true,  $name, $email, $subject, $message);
  echo $contact->send();

  echo "<h2> Email enviado com sucesso!</h2>";
  exit;
};