<?php

require($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');

global $wpdb;

$email = $_POST['Email'];

$sql = "SELECT * FROM wp_newsletters where email =  '$email';";
$email_cadastrado = $wpdb->query($sql);

if ($email_cadastrado == 0){

  if (validaEmail($email) == true){

    $sql = "INSERT INTO wp_newsletters (email) VALUES ('$email');";
    $insert = $wpdb->query($sql);

    if ($insert){
      $data['success'] = true;
      $data['status'] = 'success';
      $data['msg'] = 'Email cadastrado com sucesso!';
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
}else{
  $data['success'] = false;
  $data['status'] = 'email ja cadastrado';
  $data['msg'] = 'Email já cadastrado!';
}

echo json_encode($data);
