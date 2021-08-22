
<?php
	session_start();
	$nome = $_GET['nome'];

	$email = $_GET['email'];
	$area = $_GET['area'];


	echo "<hr>";

	if (empty($nome && $email && $area)) {
		echo "O Campo Nome e ou e-mail ficaram vazios. Ou Ainda ocorreu um erro inesperado<br>";
		$_SESSION['erroCampoNome'] =  "O Campo Nome e ou e-mail ficaram vazios. Ou Ainda ocorreu um erro inesperado<br>";
		echo header("Location: contato.html");
	}

	if (isset($_GET['nome'])) {
		if (!empty($_GET['nome'])) {
			echo "Recebido<br>";
		}
	}

	echo "Nome: ".$nome. "<br>"."E-mail: " .$email. "\n";
	echo "<hr>";
	echo "<br><h3>Sua Mensagem foi Essa?</h3> <br>" . $area. "\n";
	echo "<hr>";
	echo "<br><h3>Atenção!!</h3> Confira se os seus dados estão corretos<br>" ;
	echo "<br>";
	echo "<hr>";
	echo "<br><a href=\"mapachris.html\">Voltar<a/>";



?>