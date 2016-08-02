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
			
			$codigo = isset($_POST["tcodigo"])?$_POST["tcodigo"]:"[não informado]";
			$nomeCurso = isset($_POST["tnomeC"])?$_POST["tnomeC"]:"[não informado]";
			$duracao = isset($_POST["tduracao"])?$_POST["tduracao"]:"[não informado]";
			$turno = isset($_POST["sturnoC"])?$_POST["sturnoC"]:"[não informada]";
			$mensalidades = isset($_POST["tmensalidade"])?$_POST["tmensalidade"]:"[não informada]";
			$descritivo = isset($_POST["tdescritivo"])?$_POST["tdescritivo"]:"[não informada]";
			//$imagem1 = isset($_POST["imagem1"])?$_POST["imagem1"]:"-";
			/*$imagem2 = isset($_POST["imagem2"])?$_POST["imagem2"]:"-";
			$imagem3 = isset($_POST["imagem3"])?$_POST["imagem3"]:"-";
			$imagem4 = isset($_POST["imagem4"])?$_POST["imagem4"]:"-";*/

			
			if (isset($_FILES['imagem1'])) {
				/*$extensao = strtolower(substr($_FILES['imagem1']['name'], -4));
				$novo_nome1 = md5(time()).$extensao;
				$diretorio = "upload/";*/
				//$name 	= $_FILES['imagem1']['name']; //Atribui uma array com os nomes dos arquivos à variável
		      	$tmp_name = $_FILES['imagem1']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável
		 		$cont = count($tmp_name);
		      	//$allowedExts = array(".gif", ".jpeg", ".jpg", ".png", ".bmp"); //Extensões permitidas
		       	$diretorio = 'upload/';
		 
			    for($i = 0; $i < $cont; $i++) //passa por todos os arquivos
			    {
			    	$foto = $_FILES['imagem1']['name'][$i];   
			    	move_uploaded_file($_FILES['imagem1']['tmp_name'][$i], $diretorio.$foto);			    	
					$img[] = $foto;
				}

				$img = implode(';', $img);			
				$sql = "INSERT INTO cursos(codigo, nomedocurso, duracao, turno, mensalidades, descritivo, imagem1)								
								VALUES('$codigo','$nomeCurso','$duracao','$turno','$mensalidades','$descritivo','$img')";

				$linha_inserida = $mysqli->query($sql);

				if($linha_inserida) {
					echo "<script>alert(\"Cadastro efetuado !\")</script>";
					echo "<script>window.location = \"cadastrarCurso.php\"</script>";
				}else{/*seu ouve algum erro...*/
					echo " Cadastro não finalizado ! </p>";
				}
			
			}
		?>	
		<br><br>
		<!--<input type="button" value="Voltar"  onClick="Voltar()">-->
		</fieldset>
	</div>
</body>
</html>