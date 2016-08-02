<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Autenticando...</title>

	<script type="text/javascript">
	function loginsucesso(){
		setTimeout("window.location='acessar.php', 5000");
	}
	function loginerro(){
		setTimeout("window.location='administrator.php', 5000");
	}

	</script>

</head>
	<body>

		<?php require_once('conexao.php'); ?>

		<?php 
			$login = isset($_POST["tLogin"])?$_POST["tLogin"]:"[não informado]";
			$senha = isset($_POST["tSenha"])?$_POST["tSenha"]:"[não informada]";

			$sql = "SELECT * FROM administrator WHERE login = '$login' and senha = '$senha'";
			$query = $mysqli->query($sql); // Executando a aquery para verificação de login e senha ... 

			$rows = mysqli_num_rows($query);

			if($rows > 0){
				session_start();
				$_SESSION['login'] = $_POST['tLogin'];
				$_SESSION['senha'] = $_POST['tSenha'];
				
				echo "<script>alert(\"Olá, seja bem vindo !\")</script>";
				echo "<script>loginsucesso()</script>";
			}else{
				echo "<script>alert(\"Login ou senha inválidos !\")</script>";
				echo "<script>loginerro()</script>";
			}
		?>
	</body>
</html>