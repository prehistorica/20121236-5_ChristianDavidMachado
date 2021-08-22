<?php
	
	session_start();
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$area = $_POST['area'];
	$quantidade = $_POST['quantidade'];
	$valor = $_POST['valor'];
	$valor = 1.00;
	$total = $quantidade*$valor;


	if (empty($nome && $email && $endereco && $quantidade)) {
		echo "O Campo Nome e ou e-mail ficaram vazios. Ou Ainda ocorreu um erro inesperado<br>";
		$_SESSION['erroCampoNome'] =  "O Campo Nome e ou e-mail ficaram vazios. Ou Ainda ocorreu um erro inesperado<br>";
		echo header("Location: produtobrigadeiro.html");
	}

	if (isset($_POST['nome'])) {
		if (!empty($_POST['nome'])) {
			echo "<h1>Sucesso!!!</h1><br> <h2>Aguarde o Contato de Nossos Atendentes</h2><br>";
		}
	}

	echo "<h3>Confira se seus Dados Estão Corretos</h3><br>";
	echo "Nome: " .$nome. "<br>";
	echo "<hr>";
	echo "E-mail: " .$email. "<br>";
	echo "<hr>";
	echo "Endereço: " .$endereco. "<br>";
	echo "<hr>";
	echo "Observações: " .$area. "<br>";
	echo "<hr>";
	echo "Quantidade: " .$quantidade. " brigadeiros" . "<br>";
	echo "<hr>";
	echo "Total R$: " .$total. ",00". "<br>";
	echo "<hr>";
	echo "<br><a href=\"mapachris.html\">Voltar ao Menu Principal<a/>";



?>