<?php

require($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');
require($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/etiqueta/assets/vendor/mail/PHPMailerAutoload.php');

global $wpdb;

$nome = $_POST['Nome'];
$cnpj = $_POST['CNPJ'];
$email = $_POST['Email'];
$telefone = $_POST['Telefone'];
$mensagem = $_POST['Mensagem'];

if (validaEmail($email) == true){

  try{
    $mail = new PHPMailer;
  }catch(\Exception $e){
    echo $e;
  }

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.bettacommerce.com.br';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'marcos.luiz@bettacommerce.com.br';                 // SMTP username
  $mail->Password = 'Marcos0203';                           // SMTP password
  $mail->Port = 587;                                    // TCP port to connect to

  $sql = "INSERT INTO wp_contato (nome, cnpj, email, telefone, mensagem) VALUES ('$nome', '$cnpj', '$email', '$telefone', '$mensagem');";
  $insert = $wpdb->query($sql);

  if ($insert){
    $mail->setFrom('marcos.luiz@bettacommerce.com.br', 'Grupo Etiqueta');
    $mail->addAddress('contato@grupoetiqueta.com.br');     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Portal Etiqueta Contato';
    $mail->Body = '
                    <p>Nome: '.$nome.'</p>
                    <p>Nome da empresa/CNPJ: '.$cnpj.'</p>
                    <p>Email: '.$email.'</p>
                    <p>Telefone: '.$telefone.'</p>
                    <p>Mensagem: '.$mensagem.'</p>
                  ';
    $mail->CharSet = 'UTF-8';

    if(!$mail->send()) {
        $data['success'] = false;
        $data['status'] = $mail->ErrorInfo;
        $data['msg'] = 'Não foi possivel enviar seu email!';
    } else {
        $data['success'] = true;
        $data['status'] = 'success';
        $data['msg'] = 'Agradecemos seu contato! Retornaremos em breve!';
    }
  }else{
    $data['success'] = false;
    $data['status'] = 'Erro ao inserir no banco';
    $data['msg'] = 'Erro ao inserir no banco';
  }

}else{
  $data['success'] = false;
  $data['status'] = 'email invalido';
  $data['msg'] = 'Email invalido!';
}

echo json_encode($data);
