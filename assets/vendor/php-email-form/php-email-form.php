<?php
class PHP_Email_Form
{

  public function __construct(
    $to,
    $ajax,
    $name,
    $email,
    $objective,
    $subject,
    $message
  ) {
    $this->to = $to;
    $this->ajax = $ajax;
    $this->name = $name;
    $this->email = $email;
    $this->objective = $objective;
    $this->subject = $$subject;
    $this->message = $message;
  }


  public function send()
  {
    if (mail($this->to, 'GS MICROS - MENSSAGEM DO SITE', $this->message)) :
      echo "Sua mensagem foi enviada com sucesso!";
    endif;
  }
}