<?php

// ==========================================================
// FORMULÁRIO DE CONTATO - GSMICROS
// ==========================================================

// Aceita somente requisições POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: ../index.php#contact');
  exit;
}


// ==========================================================
// RECEBIMENTO DOS DADOS
// ==========================================================

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');


// ==========================================================
// VALIDAÇÃO DOS CAMPOS
// ==========================================================

// Verifica campos vazios
if ($nome === '' || $email === '' || $mensagem === '') {
  header('Location: ../index.php?status=empty#contact');
  exit;
}


// Verifica se o e-mail é válido
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: ../index.php?status=email#contact');
  exit;
}


// ==========================================================
// CONFIGURAÇÃO DO ENVIO
// ==========================================================

// E-mail que receberá as mensagens
$destinatario = 'contato@gsmicros.com.br';

// Assunto da mensagem
$assunto = 'Mensagem enviada pelo site GSMICROS';


// ==========================================================
// CORPO DA MENSAGEM
// ==========================================================

$corpo = "Nova mensagem recebida através do site GSMICROS.\n\n";

$corpo .= "Nome: " . $nome . "\n";
$corpo .= "E-mail: " . $email . "\n\n";

$corpo .= "Mensagem:\n";
$corpo .= $mensagem;


// ==========================================================
// CABEÇALHOS
// ==========================================================

// O remetente pertence ao próprio domínio.
// O Reply-To permite responder diretamente ao visitante.
$headers = "From: GSMICROS <contato@gsmicros.com.br>\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


// ==========================================================
// ENVIO
// ==========================================================

if (mail($destinatario, $assunto, $corpo, $headers)) {

  // Sucesso
  header('Location: ../index.php?status=success#contact');
  exit;
} else {

  // Erro
  header('Location: ../index.php?status=error#contact');
  exit;
}
