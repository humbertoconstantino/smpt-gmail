<?php




$assunto = utf8_encode($_POST['assunto']);

if ($assunto == 0){
   $assunto = "Financeiro";
} else if($assunto == 1){
    $assunto = "Correção SICAP";
}
else if ($assunto == 2){
    $assunto = "Melhoria SICAP";
}

$complemento = utf8_encode($_POST['complemento']);
$nome = utf8_encode($_POST['nome']);
$email = utf8_encode($_POST['email']);
$telefone = utf8_encode($_POST['telefone']);
$mensagem = utf8_encode($_POST['mensagem']);

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

// Configurações do Servidor de e-mail

$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = "true";
$mail->Username = "--";
$mail->Password = "--";

// Configuração da Mensagem

$mail->setFrom($mail->Username, "PORTAL CFI-PE"); // Remetente
$mail->addAddress('--'); // Destinatário
$mail->Subject = "Fale-conosco | PORTAL CFI-PE"; // Assunto do e-mail

$conteudo_email = "
Uma pessoa enviou um contato pelo fale-conosco:
<br><br>

Nome do interessado: $nome <br> <br>
E-mail do interessado: $email <br> <br>
Telefone : $telefone <br> <br>
Assunto : $assunto <br> <br>
Complemento do assunto: $complemento <br> <br>
Mensagem:<br>
<strong>$mensagem</strong>
";

$mail->isHTML(true);
$mail->Body = $conteudo_email;

if ($mail->send()){
    echo "<script type='text/javascript'> alert('Contato Enviado com Sucesso!'); window.location.href='contato.php'; </script>";
} else{
    echo "Falha ao enviar o e-mail: ". $mail->ErrorInfo;
}
