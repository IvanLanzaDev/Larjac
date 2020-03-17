<?php
//Variáveis

$subject = "Nova Mensagem do Site";
$name = $_POST['name_msg'];
$email = $_POST['email_msg'];
$msg = $_POST['msg_msg'];


$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


// Compo E-mail


/*if($cod == 1){
  $emailenviar = "contato@ganhevoce.com";  
}

if($cod == 1){
    $emailenviar = "joao.bonatti@ganhevoce.com";  
    $invite_name = "João Bonatti";   
    $ganhevoce = "https://aciscs.ganhevoce.com.br";
}

if($cod == 2){
    $emailenviar = "marianna.fanti@ganhevoce.com"; 
    $invite_name = "Marianna Fanti";
    $ganhevoce = "https://aciha.ganhevoce.com.br";
}

if($cod == 3){
    $emailenviar = "morgana.costa@ganhevoce.com";  
    $invite_name = "Morgana Costa";  
    $ganhevoce = "https://planodf.ganhevoce.com.br";
}*/


  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdana;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='0' cellpadding='1' cellspacing='1' bgcolor='#FFF'>
            <tr>
                <td>
                <h2>Olá, $name enviou uma mensagem pelo site.
                <tr>
                    <td width='500'><b>Nome: </b>$name</td>
                </tr>
                <tr>
                    <td width='320'><b>Email: </b>$email</td>
                </tr>
                <tr>
                    <td width='320'><b>CPF: </b>$msg</td>
                </tr>
                
                
                </td>
            </tr>  
            <tr>
                <td>Mensagem enviada em: <b>$data_envio</b></td>
            </tr>
            
            
        </table>
    </html>
  ";

//enviar
  
  // emails para quem será enviado o formulário





  $emailenviar = "comercial@larjac.com.br";
  
  
  $destino = $emailenviar;
  $assunto = "Nova Mensagem do Site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= "From: $name <$email>\r\n";
    
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "Obrigado";
//echo " <meta http-equiv='refresh' content='1;URL=index.html'>";
echo " <meta http-equiv='refresh' content='1;URL=ok-new-message.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
  

?>