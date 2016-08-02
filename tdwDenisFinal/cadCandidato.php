<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulário PHP</title>

</head>
<body>
	<div id="reg">
		<fieldset id="inforeg">
	
		<?php require_once('conexao.php'); ?>

		<?php
			
			$nome = isset($_POST["tNome"])?$_POST["tNome"]:"[não informado]";
			$nascimento = isset($_POST["tNasc"])?$_POST["tNasc"]:"[não informada]";
			$sexo = isset($_POST["sSexo"])?$_POST["sSexo"]:"[não informado]";			
			$cpf = isset($_POST["tCpf"])?$_POST["tCpf"]:"[não informado]";			
			$rg = isset($_POST["tRg"])?$_POST["tRg"]:"[não informado]";							
			$longradouro = isset($_POST["tLongra"])?$_POST["tLongra"]:"[não informado]";						
			$numero = isset($_POST["tNumero"])?$_POST["tNumero"]:"[não informado]";			
			$complemento = isset($_POST["tCompl"])?$_POST["tCompl"]:"[não informado]";			
			$bairro = isset($_POST["tBairro"])?$_POST["tBairro"]:"[não informado]";			
			$cidade = isset($_POST["tCid"])?$_POST["tCid"]:"[não informado]";			
			$cep = isset($_POST["tCep"])?$_POST["tCep"]:"[não informado]";
			$telf = isset($_POST["tTelfixo"])?$_POST["tTelfixo"]:"[não informado]";			
			$telc = isset($_POST["tTelcelular"])?$_POST["tTelcelular"]:"[não informado]";			
			$email = isset($_POST["tMail"])?$_POST["tMail"]:"[não informado]";			
			$curso1 = isset($_POST["sCurso1"])?$_POST["sCurso1"]:"[não informado]";
			$curso2 = isset($_POST["sCurso2"])?$_POST["sCurso2"]:"[não informado]";

			// Procurar criar campos do banco de dados sem espaço, por exemplo: "teledonecelular" colocar "telefonecelular"

			$sql = "INSERT INTO candidatos(nome, datanascimento, sexo, cpf, rg, longradouro, numero, complemento, 										               bairro, cidade, cep, telefonefixo, telefonecelular, email, curso1, curso2)
								
								VALUES('$nome','$nascimento','$sexo','$cpf','$rg','$longradouro','$numero','$complemento','$bairro','$cidade','$cep','$telf','$telc','$email','$curso1','$curso2')";

			$linha_inserida = $mysqli->query($sql);

			if($linha_inserida) {
				echo "<script>alert(\"Inscrição realizada com sucesso !\")</script>";
				echo "<script>window.location = \"inscricao.php\"</script>";
			}else{/*seu ouve algum erro...*/
				echo "<p><b>$nome</b><br /> , sua inscrição não foi finalizada ! </p>";
			}
		?>	
		<br><br>
		<!--<input type="button" value="Voltar"  onClick="Voltar()">-->
		</fieldset>
	</div>
</body>
</html>