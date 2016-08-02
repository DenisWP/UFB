	<?php
			$host = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "ufb";
			$mysqli = mysqli_connect($host, $usuario, $senha, $banco);

			if (mysqli_connect_error()){
  				echo "Falha ao conectar com o banco de dados: " . mysqli_connect_error();
  			}
	?>