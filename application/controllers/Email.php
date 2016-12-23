<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

  public function enviar_email() {
      $dados['titulo'] = "Você recebeu uma mensagem do seu site!";

      $this->load->library('email');
      $this->email->from($_POST['email'], $_POST['nome']);
      $this->email->to('reingruber@blinkme.com.br', 'Blink.Me');
      $this->email->subject($_POST['assunto']);
      $retorno_site = base_url('/site');

      unset($_POST['email_site']);
      unset($_POST['nome_site']);
      unset($_POST['retorno_site']);
      $dados['campos'] = $_POST;

      $this->email->message($this->load->view('site/custom_email', $dados, TRUE));

      if ($this->email->send()) {
	 echo" <script>document.location.href='$retorno_site'</script>";
      } else {
          //$this->email->print_debugger();
      }
  }

}

?>
