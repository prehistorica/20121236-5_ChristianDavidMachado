<?php
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$area = $_POST['area'];
$arquivo = $_POST['arquivo'];

 

echo "<hr>";


if (empty($nome && $email )) {
          echo "O Campo Nome e ou e-mail ficaram vazios. Ou Ainda ocorreu um erro inesperado<br>";
          $_SESSION['erroCampoNome'] =  "O Campo Nome e ou e-mail ficaram vazios<br>";
          echo header("Location: enviarreceita.html");
     }

     if (isset($_POST['nome'])) {
          if (!empty($_POST['nome'])) {
               echo "<h2>Sucesso!!!</h2><br>";
          }
     }
echo "<strong><i>Dados: </strong></i><br>";
echo "Nome: ".$nome. "<br>"."E-mail: " .$email;
echo "<hr>";

echo "<br><h3>Sua Mensagem foi Essa?</h3> <br>" . $area;
echo "<hr>";
echo "<h2>Obrigado por sua receita!!!</h2> " .$arquivo;
echo "<hr>";

echo "<br><a href=\"mapachris.html\">Voltar<a/><br>";





?>