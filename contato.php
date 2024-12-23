<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coleta os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  // Configura os detalhes do email
  $to = "contato@eaidocin.com.br";  // <- Altere para o seu email desejado
  $subject = "Nova Mensagem do Site";
  $message = "Nome: " . $nome . "\nEmail: " . $email . "\nMensagem: " . $mensagem;
  $headers = "From: " . $email;

  // Envia o email
  if (mail($to, $subject, $message, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Ocorreu um erro ao enviar a mensagem.";
  }
}
?>